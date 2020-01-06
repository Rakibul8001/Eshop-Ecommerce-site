@extends('admin.layout.master')
@section('dashboard')
<div class="content-wrapper">
    <h3 class="page-heading-md-4">Create Products</h3>
    <div class="row-md-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('category.update',$category->id) }}" method="post"  enctype="multipart/form-data">
                        @csrf
                        @include('admin.partials.messages')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $category->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea name="description" class="form-control" rows="3" cols="5" id="exampleInputEmail1"  >{{ $category->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Old Category Image</label><br>
                            <img src="{{asset('images/categories/'.$category->image)}}" height="100px" width="150">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">New Category Image (optional)</label>
                            <input type="file" name="image" class="form-control" id="Category_image">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Parent Category(optional)</label>
                            <select name="parent_id" class="form-control">
                                <option value="" >-- Select Parent Category --</option>
                                @foreach($createCategory as $cat)
                                <option value="{{ $cat->id }}" {{ $cat->id == $category->id ? 'selected':'' }} >{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection






