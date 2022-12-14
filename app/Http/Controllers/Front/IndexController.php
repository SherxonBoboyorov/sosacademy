<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Article;
use App\Models\Warranty;
use App\Models\Calback;
use App\Models\Product;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Models\Category;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class IndexController extends Controller
{
    public function homepage()
    {

        $sliders =  Slider::orderBy('created_at', 'DESC')->get();
        $articles = Article::orderBy('created_at', 'DESC')->paginate(2);
        $warranties =  Warranty::orderBy('created_at', 'DESC')->get();
        $calbacks = Calback::orderBy('created_at', 'DESC')->get();
        $products = Product::orderBy('created_at', 'DESC')->take(1)->get();
        $categories = Category::with('sub_categories')->get();
        return view('front.index', compact('sliders','articles','warranties','calbacks','products','categories'));
    }

}
