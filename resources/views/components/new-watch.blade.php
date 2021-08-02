@props(['watch' => $watch])

<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
    <div class="single-new-pro mb-30 text-center">
        <div class="product-img">
            <img src="{{ $watch->image_url }}" alt="">
        </div>
        <div class="product-caption">
            <h3><a href="product_details.html">{{ $watch->name }}</a></h3>
            <span>$ {{ $watch->price }}</span>
        </div>
    </div>
</div>