@php
    use \Illuminate\Support\Facades\Auth;
    $user = Auth::user();
@endphp

<x-dashboard-layout>
    <div class="w-full h-full bg-white py-6 px-6 flex flex-col items-center gap-y-5">
        @if($errors->any())
            <div class="flex flex-col gap-3">
                @foreach($errors->all() as $error)
                    <p class="w-full py-3 px-5 bg-red-400 rounded-md text-white">{{$error}}</p>
                @endforeach
            </div>
        @endif
        <form action="{{route("product.store")}}" method="POST" class="bg-gray-200 p-5 flex flex-col gap-y-5 items-center w-full max-w-screen-sm" enctype="multipart/form-data">
            @csrf
            <h1 class="text-center text-2xl font-bold mb-6">Add New Product</h1>
            <div class="grid grid-cols-[150px_1fr] items-center gap-x-5 w-full">
                <label for="FullName" class="w-full">Product Name</label>
                <input type="text" id="FullName" value="{{old("name")}}" class="outline-0 border-0 rounded-sm "
                       name="name" placeholder="Product Name">
            </div>
            <div class="grid grid-cols-[150px_1fr] items-center gap-x-5 w-full">
                <label for="price" class="w-full">Price</label>
                <input type="text" id="price" value="{{old("price")}}" class="outline-0 border-0 rounded-sm "
                       name="price" placeholder="Price">
            </div>
            <div class="grid grid-cols-[150px_1fr] items-start gap-x-5 w-full">
                <label for="desc" class="w-full">Description</label>
                <textarea id="desc" value="{{old("description")}}"
                          class="outline-0 border-0 rounded-sm resize-none h-28"
                          name="description" placeholder="Add a Product Description"></textarea>
            </div>
            <div class="grid grid-cols-[150px_1fr] items-center gap-x-5 w-full">
                <label for="photo" class="w-full">Add Photo</label>
                <input type="file" accept="image/*" id="photo" class="outline-0 border-0 rounded-sm "
                       name="image">
            </div>
            <button class="bg-indigo-600 px-10 py-3 text-white rounded-full hover:bg-indigo-500 transition-all">Save
            </button>
        </form>
    </div>
</x-dashboard-layout>
