@php
    use \App\Models\Product;

    $products = Product::orderBy('created_at','DESC')->limit(8)->get();
@endphp

    <!-- start product Area -->
<section class="section_gap">
    <!-- single product slide -->
    <div class="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Latest Products</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et
                            dolore
                            magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single product -->
                @foreach($products as $product)
                    <x-product-card name="{{$product->name}}"
                                    slug="{{$product->slug}}"
                                    imgUrl="{{$product->imageUrl ? asset($product->imageUrl) : asset('img/product/p3.jpg')}}"
                                    price="150.00"/>
                        @endforeach
                        <!-- single product -->
            </div>
        </div>
    </div>
    <!-- single product slide -->
</section>
<!-- end product Area -->
