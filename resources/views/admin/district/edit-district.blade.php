@extends('admin.layout.master')
@section('dashboard')
    <div class="content-wrapper">
        <h3 class="page-heading-md-4">Edit District</h3>
        <div class="row-md-2">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('district.update',$district->id) }}" method="post"  enctype="multipart/form-data">
                            @csrf
                            @include('admin.partials.messages')
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $district->name }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Division Name</label>
                                <select name="division_id" class="form-control" id="exampleInputEmail1" >
                                    <option value="">--Select Division--</option>
                                    @foreach($divisions as $division)
                                        <option value="{{ $division->id }}"{{ $district->division->id == $division->id ? 'selected':'' }}>{{ $division->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update District</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection






