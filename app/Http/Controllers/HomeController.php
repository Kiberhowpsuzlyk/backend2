<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $brands = Brand::orderBy('id')
            ->get();
//
        $products = Product::with('user','category', 'brand')
            ->orderBy('id', 'desc')
            ->paginate(20);
//

        $categories = Category::orderBy('id')
            ->get();

        return view('home.index')
            ->with([
                'brands' => $brands,
                'products' => $products,
                'categories' => $categories,
            ]);
    }

}
