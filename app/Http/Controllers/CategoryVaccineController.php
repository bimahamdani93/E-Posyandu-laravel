<?php

namespace App\Http\Controllers;

use App\Models\CategoryVaccine;
use Illuminate\Http\Request;
Use Alert;

class CategoryVaccineController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
   
    //read data
    public function index()
    {
        $category_vaccines = CategoryVaccine::all();      //nama model
        return view('category-vaccines.index', compact('category_vaccines'));
    }

    //create page
    public function create()
    {
        return view('category-vaccines.create');
    }

    //create data
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category' => 'required|unique:category_vaccines',  //uniq dari database
        ]);

        $category_vaccines = new CategoryVaccine;
        $category_vaccines->category = $request["category"];  //diisi dengan nilai textfield category
        $category_vaccines->save(); //insert into category
        Alert::success('', 'Tambah kategori vaksin berhasil!');
        return redirect('/category-vaccines');
    }

    //edit data
    public function edit($id)
    {
        $category_vaccine = CategoryVaccine::find($id);
        return view('category-vaccines.edit', compact('category_vaccine'));
    }

    //update data
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'category' => 'required|unique:category_vaccines',  //uniq dari database
        ]);

        $update = CategoryVaccine::where('id', $id)->update([
            'category' => $request->category
        ]);

        Alert::success('', 'Update kategori vaksin berhasil!');
        return redirect('/category-vaccines');
    }

    //delete data
    public function destroy($id)
    {
        Alert::success('', 'Hapus kategori vaksin berhasil!');
        CategoryVaccine::destroy($id);
        return redirect('/category-vaccines');
    }
}