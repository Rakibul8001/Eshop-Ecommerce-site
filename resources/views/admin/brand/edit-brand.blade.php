@extends('admin.layout.master')
@section('dashboard')
<div class="content-wrapper">
    <h3 class="page-heading-md-4">Edit Brand</h3>
    <div class="row-md-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('brand.update',$brand->id) }}" method="post"  enctype="multipart/form-data">
                        @csrf
                        @include('admin.partials.messages')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $brand->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea name="description" class="form-control" rows="3" cols="5" id="exampleInputEmail1"  >{{ $brand->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Old Category Image</label><br>
                            <img src="{{asset('images/brands/'.$brand->image)}}" height="100px" width="150">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">New Category Image (optional)</label>
                            <input type="file" name="image" class="form-control" id="Brand_image">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Brand</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection






