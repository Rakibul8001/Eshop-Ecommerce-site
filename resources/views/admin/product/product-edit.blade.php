@extends('admin.layout.master')
@section('dashboard')

    <div class="content-wrapper">
        <h3 class="page-heading-md-4">Edit Products</h3>
        <div class="row-md-2">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.product.update',$product->id) }}" method="post"  class="form-sample" enctype="multipart/form-data">
                            {{ @csrf_field() }}
                            @include('admin.partials.messages')
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="product_title" class="form-control"   value="{{ $product->product_title }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea name="short_desc" class="form-control" rows="3" cols="5" >{{ $product->short_desc }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="text" name="product_price" class="form-control" value="{{ $product->product_price }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Quantity</label>
                                <input type="text" name="quantity" class="form-control" value="{{ $product->quantity }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Select Category</label>
                                <select name="category_id" class="form-control">
                                    <option value="">--Please select Category--</option>
                                    @foreach(\App\Category::orderBy('name','asc')->where('parent_id',null)->get() as $parent)
                                        <option value="{{ $parent->id }}" {{ $parent->id == $product->category->id ? 'selected':''}}>{{ $parent->name }}</option>
                                        @foreach(\App\Category::orderBy('name','asc')->where('parent_id',$parent->id)->get() as $child)
                                            <option value="{{ $child->id }}" {{ $child->id == $product->category->id ? 'selected':''}}>sub_cat-->{{ $child->name }}</option>
                                        @endforeach
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Select Brand</label>
                                <select name="brand_id" class="form-control">
                                    <option value="">--Please select Brand--</option>
                                    @foreach(\App\Brand::orderBy('name','asc')->get() as $br)
                                        <option value="{{ $br->id }}" {{ $br->id == $product->brand->id ? 'selected':'' }}>{{ $br->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="product_image">Product Image</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="file" name="product_image[]" class="form-control" id="product_image">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Product Status</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="status">
                                    <option>--Select Status--</option>
                                    <option value="1" {{$product->status==1?'Selected':''}}>Published</option>
                                    <option value="0" {{$product->status==0?'Selected':''}}>Unpublished</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection






