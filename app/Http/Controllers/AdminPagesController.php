<?php

namespace App\Http\Controllers;

use App\Product;
use Image;
use App\ProductImage;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function index(){
        $products = Product::orderBy('id','desc')->get();
        return view('admin.product.index')->with('products',$products);
    }
    public function createProduct(){
        return view('admin.product.product-create');
    }
    public function productStore(Request $request){
        $request->validate([
            'product_title' => 'required|max:255',
            'short_desc' => 'required',
            'product_price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'category_id' => 'required|numeric',
            'brand_id' => 'required|numeric',
            'status' => 'required',
        ]);

        $product = new Product();
        $product->product_title = $request->product_title;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->short_desc = $request->short_desc;
        $product->product_price = $request->product_price;
        $product->offer_price = $request->offer_price;
        $product->quantity = $request->quantity;
        $product->status = $request->status;
        $product->admin_id = 1;
        $product->save();



        if(count($request->product_image) >0){
            $i=0;
            foreach($request->product_image as $image){
                $img = time(). $i .'.'.$image->getClientOriginalExtension();
                $location = public_path('images/products-img/'.$img);
                Image::make($image)->save($location);

                $product_image = new ProductImage();
                $product_image->product_id = $product->id;
                $product_image->image = $img;
                $product_image->save();
                $i++;
            }
        }
        return redirect()->route('admin.product.create');
    }

    public function editProduct($id){
        $product = Product::find($id);
        return view('admin.product.product-edit')->with('product',$product);
    }
    public function productUpdate(Request $request,$id){
        $request->validate([
            'product_title' => 'required|max:255',
            'short_desc' => 'required',
            'product_price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'category_id' => 'required|numeric',
            'brand_id' => 'required|numeric',
            'status' => 'required',
        ]);

        $product = Product::find($id);
        $product->product_title = $request->product_title;
        $product->short_desc = $request->short_desc;
        $product->product_price = $request->product_price;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->status = $request->status;
        $product->save();

        return redirect()->route('admin.index');
    }
    public function productDelete($id){
        $product = Product::find($id);
        if(!is_null($product)){
            $product->delete();
        }
        session()->flash('success','Product deleted successfully!!');
        return back();
    }
}
