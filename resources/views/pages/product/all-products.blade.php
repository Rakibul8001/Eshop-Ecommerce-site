@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                @include('includes.sidebar')
            </div>
            <div class="col-md-8">
                <div class="widget">
                    <h3>Show All Product</h3>
                    @include('pages.product.partials.all_products')
                </div>
            </div>
        </div>
    </div>
@endsection
