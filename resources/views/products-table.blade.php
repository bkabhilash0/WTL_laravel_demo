@php
    //    $products = DB::table("products")->get();
@endphp

<x-dashboard-layout>
    <div class="pr-3">
        <table class="border-collapse shadow-lg bg-white w-full">
            <tr class="p-3">
                <th class="bg-blue-100 border text-left px-8 py-4">ID</th>
                <th class="bg-blue-100 border text-left px-8 py-4">Product Name</th>
                <th class="bg-blue-100 border text-left px-8 py-4">Price</th>
                <th class="bg-blue-100 border text-left px-8 py-4">Description</th>
                <th class="bg-blue-100 border text-left px-8 py-4">Actions</th>
            </tr>
            @foreach($products as $product)
                <tr class="p-5">
                    <td class="border px-8 py-4">{{$product->id}}</td>
                    <td class="border px-8 py-4">{{$product->name}}</td>
                    <td class="border px-8 py-4">{{$product->price}}</td>
                    <td class="border px-8 py-4 text-ellipsis line-clamp-3 overflow-hidden ">
                        <p>{{$product->description}}</p>
                    </td>
                    <td class="border px-8 py-4">
                        <div class="w-10 h-10">
                            <img
                                src="@if($product->imageUrl) {{asset($product->imageUrl)}} @else {{asset("img/blog/author.png")}} @endif"
                                alt="" class="w-full h-full object-cover">
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="py-5">
            {!! $products->links() !!}
        </div>
    </div>
</x-dashboard-layout>
