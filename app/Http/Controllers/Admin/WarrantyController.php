<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateWarranty;
use App\Http\Requests\Admin\UpdateWarranty;
use App\Models\Warranty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WarrantyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warranties = Warranty::orderBy('created_at', 'DESC')->get();
        return view('admin.warranty.index', compact('warranties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.warranty.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateWarranty  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateWarranty $request)
    {
        $data = $request->all();

        $data['image'] = Warranty::uploadImage($request);

        if (Warranty::create($data)) {
            return redirect()->route('warranty.index')->with('message', "Warranty created successfully");
        }

        return redirect()->route('warranty.index')->with('message', "Unable to create warranty");
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
        $warranty = Warranty::find($id);
        return view('admin.warranty.edit', compact('warranty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateWarranty  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWarranty $request, $id)
    {
        if (!Warranty::find($id)) {
            return redirect()->route('warranty.index')->with('message', "Article not found");
        }

        $warranty = Warranty::find($id);

        $data = $request->all();

        $data['image'] = Warranty::updateImage($request, $warranty);

        if ($warranty->update($data)) {
            return redirect()->route('warranty.index')->with('message', "Warranty updated successfully");
        }

        return redirect()->route('warranty.index')->with('message', "Unable to update warranty");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Warranty::find($id)) {
            return redirect()->route('article.index')->with('message', "Article not found");
        }

        $warranty = Warranty::find($id);

        if (File::exists(public_path() . $warranty->image)) {
            File::delete(public_path() . $warranty->image);
        }

        if ($warranty->delete()) {
            return redirect()->route('warranty.index')->with('message', "Warranty deleted successfully");
        }

        return redirect()->route('warranty.index')->with('message', "Unable to delete warranty");
    }
}
