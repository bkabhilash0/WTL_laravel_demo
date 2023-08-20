<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
//        $products = DB::table("products")->get();
        $products = Product::latest()->paginate(5);
        return view("products-table",compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("product.create-product");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "name" => "required | string | max:30 | min: 5 |unique:".Product::class,
            "price"=> "required | numeric |decimal:0,2" ,
            "description" => "required | string | min: 10 | max: 400",
            "image" => "image|mimes:jpeg,png,jpg,gif,svg|max:2048"
        ]);

        $data = [
            "name" => $request->input("name"),
            "price" => $request->get("price"),
            "slug" => Str::slug($request->input("name")),
            "description" => $request->input("description")
        ];

        if($request->file("image")){
            $file = $request->file("image");
            $fileName = date("YmdHi").$file->getClientOriginalName();
//            $path = $request->image->storeAs('public/uploads/product_images',$fileName);
            $file->move(public_path('uploads\product_images'),$fileName);
            $data['imageUrl'] = 'uploads/product_images/'.$fileName;
        }
        $res = Product::create($data);
//        dd($res);
        return back()->with("message","Product Added Successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(String $slug)
    {
        //
        $product = Product::where("slug",$slug)->firstOrFail();
        return view("product.product-detail",compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
