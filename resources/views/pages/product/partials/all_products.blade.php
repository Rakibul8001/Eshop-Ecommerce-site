<div class="row">
    @foreach($products as $product)
        <div class="col-md-4">
            <div class="card">
                @php
                    $i=1;
                @endphp
                @foreach($product->images as $image)
                    @if($i>0)
                        <a href="{{route('single-products',$product->id)}}">
                        <img class="card-img-top featured-img" src="{{asset('images/products-img/'.$image->image)}}" alt="{{ $product->product_title }}">
                        </a>
                    @endif
                    @php
                        $i-- ;
                    @endphp
                @endforeach
                <div class="card-body">
                    <a href="{{route('single-products',$product->id)}}">{{ $product->product_title }}</a>
                    <p class="card-text">Tk.{{ $product->product_price }}</p>
                    <a href="/checkout" class="btn btn-outline-warning">Add To Cart</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class=" mt-2 pagination">
    {{ $products->links() }}
</div>
