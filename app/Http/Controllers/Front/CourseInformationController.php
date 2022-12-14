<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Price;
use App\Models\Category;
use Illuminate\Http\Request;

class CourseInformationController extends Controller
{
    public function course_information()
    {
        $cartegoryId = request('category_id');

        if ($cartegoryId)
        {
            $category = Category::find($cartegoryId);
        }else {
            $product = Product::take(10)->get();
        }

        return view('front.course_information', [
           'products' => Product::orderBy('created_at', 'DESC')->take(1)->get(),
           'prices' => Price::orderBy('created_at', 'DESC')->get()
       ]);
    }

}
