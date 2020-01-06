@extends('admin.layout.master')
@section('dashboard')

       <div class="content-wrapper">
           <h3 class="page-heading-md-4">Create Products</h3>
           <div class="row-md-2">
               <div class="col-lg-12">
                   <div class="card">
                       <div class="card-body">
                           <form action="{{route('admin.product.store')}}" method="post"  class="form-sample" enctype="multipart/form-data">
                              @csrf
                               @include('admin.partials.messages')
                               <div class="form-group">
                                   <label for="exampleInputEmail1">Title</label>
                                   <input type="text" name="product_title" class="form-control" id="exampleInputEmail1"  placeholder="Enter Product Title">
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputEmail1">Description</label>
                                   <textarea name="short_desc" class="form-control" rows="3" cols="5" id="exampleInputEmail1"  ></textarea>
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputEmail1">Price</label>
                                   <input type="text" name="product_price" class="form-control" id="exampleInputEmail1"  placeholder="Enter Product Title">
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputEmail1">Quantity</label>
                                   <input type="text" name="quantity" class="form-control" id="exampleInputEmail1"  placeholder="Enter Product Title">
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputEmail1">Select Category</label>
                                   <select name="category_id" class="form-control">
                                       <option value="">--Please select Category--</option>
                                       @foreach(\App\Category::orderBy('name','asc')->where('parent_id',null)->get() as $parent)
                                           <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                                           @foreach(\App\Category::orderBy('name','asc')->where('parent_id',$parent->id)->get() as $child)
                                               <option value="{{ $child->id }}">sub_cat-->{{ $child->name }}</option>
                                               @endforeach
                                           @endforeach
                                   </select>
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputEmail1">Select Brand</label>
                                   <select name="brand_id" class="form-control">
                                       <option value="">--Please select Brand--</option>
                                       @foreach(\App\Brand::orderBy('name','asc')->get() as $brand)
                                           <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                       @endforeach
                                   </select>
                               </div>
                               <div class="form-group">
                                   <label for="product_image">Product Image</label>
                                   <div class="row">
                                       <div class="col-md-4">
                                           <input type="file" name="product_image[]" class="form-control" id="product_image">
                                       </div>
                                       <div class="col-md-4">
                                           <input type="file" name="product_image[]" class="form-control" id="product_image">
                                       </div>
                                       <div class="col-md-4">
                                           <input type="file" name="product_image[]" class="form-control" id="product_image">
                                       </div>
                                   </div>

                               </div>
                               <div class="form-group">
                                   <label for="exampleFormControlSelect1">Product Status</label>
                                   <select name="status" class="form-control" id="exampleFormControlSelect1">
                                       <option>--Select Status--</option>
                                       <option value="1">published</option>
                                       <option value="0">unpublished</option>
                                   </select>
                               </div>
                               <button type="submit" class="btn btn-primary">Add Product</button>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>


@endsection





