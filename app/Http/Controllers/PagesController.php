<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $products = Product::orderBy('id','desc')->paginate(12);
        return view('pages.home')->with('products',$products);
    }
    public function showAllProducts(){
        $products = Product::orderBy('id','desc')->paginate(12);
        return view('pages.product.all-products')->with('products',$products);
    }
    public function showSingleProducts($id){
        $product = Product::where('id',$id)->first();
        if(!is_null($product)){
            return view('pages.product.single-product')->with('product',$product);
        }
        else{
            session()->flash('errors','sorry!, there is no product available.');
            return redirect()->route('all-products');
        }

    }
    public function productSearch(Request $request){
        $search = $request->search;
        $products = Product::orWhere('product_title','like','%'.$search.'%')
            ->orWhere('short_desc','like','%'.$search.'%')
            ->orWhere('product_price','like','%'.$search.'%')
            ->orWhere('quantity','like','%'.$search.'%')
            ->orderBy('id','desc')
            ->paginate(12);
        return view('pages.product.search',compact('search','products'));
    }
}
