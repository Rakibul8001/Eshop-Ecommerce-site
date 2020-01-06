@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                @include('includes.sidebar')
            </div>
            <div class="col-md-8">
                <div class="widget">
                    <h3>Show All Products in <span class="badge badge-info">{{ $category->name }} Category</span></h3>
                    @if($products = $category->products()->paginate(12))
                        @if($products->count()>0)
                            @include('pages.product.partials.all_products')
                            @else
                            <div class="alert alert-warning">
                                <p>No Products has added</p>
                            </div>
                            @endif
                        @endif
                </div>
            </div>
        </div>
    </div>
@endsection
