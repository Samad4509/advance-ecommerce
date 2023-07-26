<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.unit.manage',[
            'units'=>Unit::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.unit.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Unit::newUnit($request);
        return back()->with('message','success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.unit.edit',[
            'unit'=>Unit::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Unit::updateUnit($request,$id);
        return redirect('/unit')->with('message','Unit Update Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Unit::deleteUnit($id);
        return back()->with('message','Unit Delete Success');
    }
}
