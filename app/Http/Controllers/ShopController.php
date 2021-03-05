<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request, $id = null)
    {
        $products = Product::where('name', 'LIKE', '%'.$request->search.'%')->paginate(9);
        $categories = Category::all();
        return view('shop.index', compact('products', 'categories', 'id'));
    }

    public function category(Request $request, $id)
    {
        $products = Product::where('category_id', $id)->paginate(9);
        $categories = Category::all();
        return view('shop.index', compact('products', 'categories', 'id'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('shop.show', compact('product'));
    }
}