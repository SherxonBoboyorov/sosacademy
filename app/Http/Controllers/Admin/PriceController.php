<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreatePrice;
use App\Http\Requests\Admin\UpdatePrice;
use App\Models\Price;
use App\Models\Product;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = Price::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.price.index', compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('admin.price.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreatePrice  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePrice $request)
    {
        $data = $request->all();

        if (Price::create($data)) {
            return redirect()->route('price.index')->with('message', "Price list created successfully");
        }

        return redirect()->route('price.index')->with('message', "Unable to create price list");
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
        $price = Price::find($id);
        $product = Product::all();

        return view('admin.price.edit', [
            'price' => $price,
            'products' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdatePrice  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrice $request, $id)
    {
        $price = Price::find($id);

        $data = $request->all();

        if ($price->update($data)) {
            return redirect()->route('price.index')->with('message', "Price list updated successfully");
        }
        return redirect()->route('price.index')->with('message', "Unable to update price list");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $price = Price::find($id);

        if ($price->delete()) {
            return redirect()->route('price.index')->with('message', "Price list deleted successfully");
        }

        return redirect()->route('price.index')->with('message', "Unable to delete price list");
    }
}
