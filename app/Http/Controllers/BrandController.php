<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

class BrandController extends Controller
{
    public function show($id)
    {
        $brands = Brand::orderBy('id')
            ->get();

        $objs = Brand::where('id', $id)
            ->firstOrFail();

        $products = Product::where('brand_id', $objs->id)
            ->orderBy('id', 'desc')
            ->paginate(40);

        return view('brand.show')
            ->with([
                'brands' => $brands,
                'objs' => $objs,
                'products' => $products,
            ]);
    }

}
