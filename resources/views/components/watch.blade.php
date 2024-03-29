@props(['watch' => $watch])

<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
    <div class="single-popular-items mb-50 text-center">
        <div class="popular-img">
            <img src="{{ $watch->image_url }}" alt="">
            <div class="img-cap">
                <a href="{{ route('watch.addToCart', ['id' => $watch->id]) }}"><span>Add to cart</span></a>
            </div>
            <div class="favorit-items">
                <span class="flaticon-heart"></span>
            </div>
        </div>
        <div class="popular-caption">
            <h3><a href="product_details.html">{{ $watch->name }}</a></h3>
            <span>$ {{ $watch->price }}</span>
        </div>
    </div>
</div>