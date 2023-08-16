<?php

namespace App\Http\Controllers;


use App\Models\Product;

class ProductController extends Controller
{
//    public function store(Request $request)
//    {
//        $request->validate([
//            'category' => 'required|integer|min:1',
//            'brand' => 'required|integer|min:1',
//            'barcode' => 'nullable|string|max:255',
//            'description' => 'nullable|string|max:1000',
//            'price' => 'required|numeric|min:0',
//            'stock' => 'required|integer|min:0',
//            'image' => 'nullable|image|mimes:jpg,jpeg|max:128|dimensions:width=1000,height=1000',
//        ]);
//
//        return view('app.product');
//    }

    public function show($id)
    {
        $obj = Product::where('id', $id)
            ->with('brand', 'user', 'category')
            ->firstOrFail();

        $products = Product::where('brand_id', $obj->brand->id)
            ->with('brand')
            ->get();

        return view('product.show')
            ->with([
                'obj' => $obj,
                'products' => $products,
            ]);
    }
}
