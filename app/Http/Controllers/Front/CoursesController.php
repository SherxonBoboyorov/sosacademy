<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        return view('front.courses', [
            'categories' => Category::orderBy('created_at', 'DESC')->get(),
            'products' => Product::orderBy('created_at', 'DESC')->get()
        ]);

    }
}
