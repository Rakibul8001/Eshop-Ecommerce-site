@extends('admin.layout.master')
@section('dashboard')

    <div class="content-wrapper">
        <h3 class="page-heading-md-4">Products</h3>
        <div class="row-md-2">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @include('admin.partials.messages')
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Sl.</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @php($i=0)
                           @foreach($products as $product)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $product->product_title }}</td>
                                    <td>{{ $product->short_desc }}</td>
                                    <td>{{ $product->product_price }}</td>
                                    <td>{{$product->status==1 ? 'Published':'Unpublished'}}</td>
                                    <td>
                                        <a href="{{route('admin.product.edit',$product->id)}}" class="btn btn-success">
                                            <span><i class="fa fa-edit"></i></span>
                                        </a>
                                        <a href="{{route('admin.product.delete',$product->id)}}" class="btn btn-danger">
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





