@extends('admin.layout.master')
@section('dashboard')
    <div class="content-wrapper">
        <h3 class="page-heading-md-4">Create Division</h3>
        <div class="row-md-2">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('division.store') }}" method="post"  enctype="multipart/form-data">
                            @csrf
                            @include('admin.partials.messages')
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1"  placeholder="Enter Product Title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Priority</label>
                                <input type="text" name="priority" class="form-control" id="exampleInputEmail1"  placeholder="Enter Product Title">
                            </div>
                            <button type="submit" class="btn btn-primary">Add Division</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection






