@php
    use \App\Models\Product;

    $products = Product::latest()->limit(8)->get();
@endphp
<div class="container">
    <h1 class="pt-5 text-center">OUR PRODUCTS</h1>
    <div class="row">
        <div class="col-12">
            <section class="lattest-product-area pb-40 category-list">
                <div class="row">
                    @foreach($products as $product)
                        <x-product-card class="col-xl-3 col-lg-4 col-md-6" name="{{$product->name}}"
                                        slug="{{$product->slug}}"
                                        imgUrl="{{$product->imageUrl ? asset($product->imageUrl) : asset('img/product/p3.jpg')}}"
                                        price="150.00"/>
                    @endforeach
                </div>
{{--                <div class="py-10">--}}
{{--                    {!! $products->links() !!}--}}
{{--                </div>--}}
            </section>
        </div>
    </div>
</div>
