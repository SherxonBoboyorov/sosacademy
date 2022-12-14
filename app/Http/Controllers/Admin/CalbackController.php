<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateCalback;
use App\Http\Requests\Admin\UpdateCalback;
use App\Models\Calback;
use Illuminate\Http\Request;

class CalbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calbacks = Calback::orderBy('created_at', 'DESC')->get();
        return view('admin.calback.index', compact('calbacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.calback.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateCalback  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCalback $request)
    {
        $data = $request->all();

        if (Calback::create($data)) {
            return redirect()->route('calback.index')->with('message', 'Calback created successfully');
        }

        return redirect()->route('calback.index')->with('message', 'Unable to create calback');
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
        $calback = Calback::find($id);
        return view('admin.calback.edit', compact('calback'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateCalback  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCalback $request, $id)
    {
        if (!Calback::find($id)) {
            return redirect()->route('calback.index')->with('message', "Calback not found");
        }

        $calback = Calback::find($id);

        $data = $request->all();


        if ($calback->update($data)) {
            return redirect()->route('calback.index')->with('message', "Calback updated successfully");
        }

        return redirect()->route('calback.index')->with('message', "Unable to update calback");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $calback = Calback::find($id);

        $calback->delete();

        return redirect()->route('calback.index')->with('message', "Unable to delete calback");
    }
}
