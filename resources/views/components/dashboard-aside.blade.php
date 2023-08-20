@php
    use \Illuminate\Support\Facades\Route;
    $name = Route::currentRouteName();
@endphp

<aside class="shadow-md h-full flex flex-1 flex-col bg-white">
    <ul>
        <li @class([
        "border-b shadow-sm py-3 px-3 transition-all",
        "bg-indigo-600 text-white" => $name === "dashboard",
        "hover:bg-gray-100" => !($name === "dashboard")
])>
            <a href="{{route("dashboard")}}"
               class="text-lg w-full block">Profile</a>
        </li>
        <li @class([
        "border-b shadow-sm py-3 px-3 transition-all",
        "bg-indigo-600 text-white" => $name === "product.create",
        "hover:bg-gray-100" => !($name === "product.create")])>
            <a href="{{route("product.create")}}" class="text-lg w-full block">
                Add Products</a></li>
        <li @class([
        "border-b shadow-sm py-3 px-3 transition-all",
        "bg-indigo-600 text-white" => $name === "products.view",
        "hover:bg-gray-100" => !($name === "products.view")
])>
            <a href="{{route("products.view")}}"
               class="text-lg w-full block">Show Products</a></li>
    </ul>
</aside>
