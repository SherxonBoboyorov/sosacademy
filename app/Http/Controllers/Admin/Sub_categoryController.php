<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateSub_category;
use App\Http\Requests\Admin\UpdateSub_category;
use App\Models\Sub_category;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Sub_categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_categories = Sub_category::orderBy('created_at', 'DESC')->get();

        return view('admin.sub_category.index', [
            'sub_categories' => $sub_categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();
        return view('admin.sub_category.create', [
            'categories' => $categories
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateSub_category  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSub_category $request)
    {
        $data = $request->all();

        if (Sub_category::create($data)) {
            return redirect()->route('sub_category.index')->with('message', "Sub_category created successfully");
        }
        return redirect()->route('sub_category.index')->with('message', "Unable to create sub_category");
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
    public function edit(Sub_category $sub_category)
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();

         return view('admin.sub_category.edit', [
            'categories' => $categories,
            'sub_category' => $sub_category
         ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateSub_category  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSub_category $request, $id)
    {
        $sub_category = Sub_category::find($id);
        $data = $request->all();

        if ($sub_category->update($data)) {
            return redirect()->route('sub_category.index')->with('message', "Sub_category updated successfully");
        }

        return redirect()->route('sub_category.index')->with('message', "Unable to update Sub_category");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sub_category = Sub_category::find($id);

        if ($sub_category->delete()) {
            return redirect()->route('sub_category.index')->with('message', "Sub_category deleted successfully");
        }
        return redirect()->route('sub_category.index')->with('message', "Unable to delete Sub_category");
    }
}
