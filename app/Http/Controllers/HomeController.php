<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categoryProducts = [];
        $categories = Category::where('home', 1)
            ->get();

        foreach ($categories as $category) {
            $categoryProducts[] = [
                'category' => $category,
                'products' => Product::where('category_id', $category->id)
                    ->where('stock', '>', 0)
                    ->with('user')
                    ->inRandomOrder()
                    ->take(6)
                    ->get(),
            ];
        }

        return view('home.index')
            ->with([
                'categoryProducts' => collect($categoryProducts),
            ]);
    }
}
