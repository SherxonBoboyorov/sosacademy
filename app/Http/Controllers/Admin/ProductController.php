<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateProduct;
use App\Http\Requests\Admin\UpdateProduct;
use App\Models\Product;
use App\Models\Sub_category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $sub_categories = Sub_category::where('category_id')->get();
        $sub_categories = Sub_category::all();
        return view('admin.product.create', compact('sub_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateProduct  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProduct $request)
    {
        $data = $request->all();

        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->title_uz, '-', 'uz');

        if (Product::create($data)) {
            return redirect()->route('product.index')->with('message', "Product created successfully");
        }

        return redirect()->route('product.index')->with('message', "Unable to create product");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $sub_categories = Sub_category::all();

        return view('admin.product.edit', [
            'product' => $product,
            'sub_categories' => $sub_categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateProduct  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduct $request, $id)
    {
        $product = Product::find($id);

        $data = $request->all();

        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->title_uz, '-', 'uz');


        if ($product->update($data)) {
            return redirect()->route('product.index')->with('message', "Product updated successfully");
        }
        return redirect()->route('product.index')->with('message', "Unable to update product");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if ($product->delete()) {
            return redirect()->route('product.index')->with('message', "Product deleted successfully");
        }

        return redirect()->route('product.index')->with('message', "Unable to delete product");
    }
}
