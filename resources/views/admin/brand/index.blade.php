@extends('admin.layout.master')
@section('dashboard')

    <div class="content-wrapper">
        <h3 class="page-heading-md-4">Show Brands</h3>
        <div class="row-md-2">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @include('admin.partials.messages')
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Sl.</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            @php($i=0)
                            @foreach($brands as $brand)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $brand->name }}</td>
                                    <td>{{ $brand->description }}</td>
                                   <td><img src="{{asset('images/brands/'.$brand->image)}}" height="100px" width="150"></td>
                                    <td>
                                        <a href="{{route('brand.edit',$brand->id)}}" class="btn btn-success">
                                            <span><i class="fa fa-edit"></i></span>
                                        </a>
                                        <a href="{{route('brand.delete',$brand->id)}}" class="btn btn-danger">
                                            <span><i class="fa fa-trash"></i></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





