<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        return view('admin.sub-category.index',[
            'categories'=> Category::all()
        ]);
    }
    public function create(Request $request)
    {
        SubCategory::newSubcategory($request);
        return redirect('/sub-category-add')->with('message','Sub Category Create Successfully');
    }
    public function manage()
    {
        return view('admin.sub-category.manage',[
            'Subcategories'=> SubCategory::all()
        ]);
    }
    public function edit($id)
    {
        return view('admin.sub-category.edit',[
            'categories'=> Category::all(),
            'subCategory'=> SubCategory::find($id)
        ]);
    }
    public function update(Request $request,$id)
    {
        SubCategory::UpdateSubCategory($request,$id);
        return redirect('/sub-category-manage')->with('message','Sub Category Update Successfully');
    }
    public function delete($id)
    {
        SubCategory::deleteSubCategory($id);
        return redirect('/sub-category-manage');
    }
}
