<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.brand.manage',[
            'brands'=>Brand::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brand.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $image=$request->file('name');
        // $imageName=$image->getClientOriginalName();
        // $driectory="image/upload";
        // $image->move($driectory,$imageName);
        // return $driectory.$imageName;
        Brand::newBrand($request);
        return back()->with('message','Brand Update Success');
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
        return view('admin.brand.edit',[
            'brand'=>Brand::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Brand::UpdateBrand($request,$id);
        return redirect('/brand')->with('message','Brand Update Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Brand::deleteBrand($id);
        return back()->with('message','Brand Delete Success');
    }
}
