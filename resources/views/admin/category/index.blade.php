@extends('admin.layout.master')
@section('dashboard')

    <div class="content-wrapper">
        <h3 class="page-heading-md-4">Show Categories</h3>
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
                                <th>Parent Category</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            @php($i=0)
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td>
                                        @if($category->parent_id == null)
                                            Primary Category
                                            @else
                                            {{ $category->parent->name }}
                                            @endif
                                    </td>
                                   <td><img src="{{asset('images/categories/'.$category->image)}}" height="100px" width="150"></td>
                                    <td>
                                        <a href="{{route('category.edit',$category->id)}}" class="btn btn-success">
                                            <span><i class="fa fa-edit"></i></span>
                                        </a>
                                        <a href="{{route('category.delete',$category->id)}}" class="btn btn-danger">
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





