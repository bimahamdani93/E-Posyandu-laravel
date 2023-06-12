<?php

namespace App\Http\Controllers;

use App\Models\Child;
use Illuminate\Http\Request;
Use Alert;

class ChildController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    //read page
    public function index()
    {
        $children = Child::all();     
        return view('children.index', compact('children'));
    }

    //create page
    public function create()
    {
        return view('children.create');
    }

    //create data
    public function store(Request $request)
    {
        $children = new Child;
        $children->nama = $request["nama"]; 
        $children->ttl = $request["ttl"]; 
        $children->umur = $request["umur"]; 
        $children->jenis_kelamin = $request["jenis_kelamin"]; 
        $children->nama_ibu = $request["nama_ibu"]; 
        $children->berat_badan = $request["berat_badan"]; 
        $children->panjang_badan = $request["panjang_badan"]; 
        $children->save(); 
        Alert::success('', 'Tambah data anak berhasil!');
        return redirect('/children');
    }

   //edit data
    public function edit($id)
    {
        $child = Child::find($id);
        return view('children.edit', compact('child'));
    }

    //Update data
    public function update(Request $request, $id)
    {
        $update = Child::where('id', $id)->update([
            'nama' => $request->nama,
            'ttl' => $request->ttl,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nama_ibu' => $request->nama_ibu,
            'berat_badan' => $request->berat_badan,
            'panjang_badan' => $request->panjang_badan
        ]);
        Alert::success('', 'Update data anak berhasil!');
        return redirect('/children');
    }

    //delete data
    public function destroy($id)
    {
        Alert::success('', 'Hapus daftar anak berhasil!');
        Child::destroy($id);
        return redirect('/children');
    }
}
