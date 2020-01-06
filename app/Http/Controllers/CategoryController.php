<?php

namespace App\Http\Controllers;

use App\Category;
use Image;
use File;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategory(){
        $categories = Category::orderBy('id','desc')->get();
        return view('admin.category.index')->with('categories',$categories);
    }
    public function createCategory(){
        $createCategory = Category::orderBy('name','desc')->where('parent_id',null)->get();
        return view('admin.category.category-create')->with('createCategory',$createCategory);
    }
    public function categoryStore(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;
        if(($request->image)>0){
                $image = $request->file('image');
                $img = time().'.'.$image->getClientOriginalExtension();
                $location = public_path('images/categories/'.$img);
                Image::make($image)->save($location);
                $category->image = $img;
        }
        $category->save();
        return redirect()->route('category.create')->with('text','Category has added successfully');

    }
    public function editCategory($id){
        $createCategory = Category::orderBy('name','desc')->where('parent_id',null)->get();
        $category = Category::find($id);
        return view('admin.category.edit-category',compact('category','createCategory'));
    }
    public function updateCategory(Request $request, $id){
        $category =  Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;
        if(($request->image)>0){
            if(File::exists('images/categories/'.$category->image)){
                File::delete('images/categories/'.$category->image);
            }
            $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/categories/'.$img);
            Image::make($image)->save($location);
            $category->image = $img;
        }
        $category->save();
        return redirect()->route('category.create')->with('text','Category has added successfully');
    }
    public function deleteCategory($id){
        $category = Category::find($id);
        if($category->parent_id == null){
            $subCategory = Category::orderBy('name','desc')->where('parent_id',$category->id)->get();
            foreach ($subCategory as $sub){
                if(File::exists('images/categories/'.$sub->image)){
                    File::delete('images/categories/'.$sub->image);
                }
                $sub->delete();
            }
        }
        if(!is_null($category)){
            if(File::exists('images/categories/'.$category->image)){
                File::delete('images/categories/'.$category->image);
            }
            $category->delete();
        }
        session()->flash('success','Product deleted successfully!!');
        return back();
    }
}
