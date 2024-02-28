<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::where('isActive', 1)->get();
        $reviews = Review::where('isActive', 1)->get();
        $partners = Partner::where('isActive', 1)->get();
        return view('client.index',compact('products','reviews', 'partners'));
    }
    public function page_404()
    {
        return view('client.page_404');
    }
    public function about()
    {
        return view('client.about');
    }
    public function coming_soon()
    {
        return view('client.coming_soon');
    }
    public function contact()
    {
        return view('client.contact');
    }
    public function services($id)
    {
        $products = Product::where('isActive', 1)->get();
        $product = Product::where('id', $id)->first();
        return view('client.user_services', compact('products', 'product'));
    }
    public function services_detail($id)
    {
        $products = Product::where('isActive', 1)->get();
        $product = Product::where('id', $id)->first();
        return view('client.services_detail', compact('products', 'product'));
    }

    public function fotback()
    {

        return view('client.fotback');
    }
    public function review()
    {

        return view('client.review');
    }
}
