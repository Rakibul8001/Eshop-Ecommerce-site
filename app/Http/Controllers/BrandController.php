<?php

namespace App\Http\Controllers;

use App\Brand;
use Image;
use File;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function showBrand(){
        $brands = Brand::orderBy('id','desc')->get();
        return view('admin.brand.index')->with('brands',$brands);
    }
    public function createBrand(){
        return view('admin.brand.brand-create');
    }
    public function brandStore(Request $request){
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->description = $request->description;
        if(($request->image)>0){
            $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/brands/'.$img);
            Image::make($image)->save($location);
            $brand->image = $img;
        }
        $brand->save();
        return redirect()->route('brand.create')->with('text','Brand has added successfully');

    }
    public function editBrand($id){
        $brand = Brand::find($id);
        return view('admin.brand.edit-brand',compact('brand'));
    }
    public function updateBrand(Request $request, $id){
        $brand =  Brand::find($id);
        $brand->name = $request->name;
        $brand->description = $request->description;
        if(($request->image)>0){
            if(File::exists('images/brands/'.$brand->image)){
                File::delete('images/brands/'.$brand->image);
            }
            $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/brands/'.$img);
            Image::make($image)->save($location);
            $brand->image = $img;
        }
        $brand->save();
        return redirect()->route('brand.create')->with('text','Brand has Updated successfully');
    }
    public function deleteBrand($id){
        $brand = Brand::find($id);
        if(!is_null($brand)){
            if(File::exists('images/brands/'.$brand->image)){
                File::delete('images/brands/'.$brand->image);
            }
            $brand->delete();
        }
        session()->flash('success','Brand deleted successfully!!');
        return back();
    }
}
