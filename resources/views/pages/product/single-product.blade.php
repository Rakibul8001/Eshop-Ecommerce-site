@extends('layouts.master')
@section('title')
    {{ $product->product_title }}| Laravel E-commerce Project
    @endsection
@section('content')
    <div class="container margin-top-20">
        <div class="row">
            <div class="col-md-4">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @php
                            $i=1;
                        @endphp
                        @foreach($product->images as $image)
                            <div class="product-item carousel-item {{ $i==1 ? 'active':'' }}">

                                <img class="d-block w-100" src="{{ asset('images/products-img/'.$image->image) }}" width="First slide">
                            </div>
                            @php $i++; @endphp
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="mt-3">
                    <p>Category <span class="badge badge-info">{{ $product->category->name }}</span></p>
                    <p>Brand <span class="badge badge-info">{{ $product->brand->name }}</span></p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="widget">
                    <h3>{{ $product->product_title }}</h3>
                    <h4>Tk.{{ $product->product_price }}.<span class="badge badge-primary">{{ $product->quantity <1 ? 'No items are available':$product->quantity.'item in stock' }}</span></h4>
                    <hr>
                    <div class="product-description">
                        <p>{{ $product->short_desc }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
