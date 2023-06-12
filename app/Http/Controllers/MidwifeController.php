<?php

namespace App\Http\Controllers;

use App\Models\Midwife;
use App\Models\Education;
use Illuminate\Http\Request;
Use Alert;


class MidwifeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //data page
    public function index()
    {
        $midwives = Midwife::all();     
        return view('midwives.index', compact('midwives'));
    }

    //create page
    public function create()
    {
        return view('midwives.create',[
            'education' => Education::all()
        ]);
    }

   //create data
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',  
            'alamat' => 'required',  
            'ttl' => 'required',  
            'umur' => 'required',  
            'nip' => 'required',  
            'id_pendidikan' => 'required',  
            'no_telepon' => 'required',  
        ]);

        $midwives = new Midwife;
        $midwives->nama = $request["nama"]; 
        $midwives->alamat = $request["alamat"]; 
        $midwives->ttl = $request["ttl"]; 
        $midwives->umur = $request["umur"]; 
        $midwives->nip = $request["nip"]; 
        $midwives->id_pendidikan = $request["id_pendidikan"]; 
        $midwives->no_telepon = $request["no_telepon"]; 
        $midwives->save(); 
    
        Alert::success('', 'Tambah bidan berhasil!');
        return redirect('/midwives');
    }

    //edit page
    public function edit($id)
    {  
        return view('midwives.edit', [
            'midwife' => Midwife::find($id),
            'education' => Education::all(),
        ]);
    }

    //update data
    public function update(Request $request, $id)
    {
        $update = Midwife::where('id', $id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'ttl' => $request->ttl,
            'umur' => $request->umur,
            'nip' => $request->nip,
            'id_pendidikan' => $request->id_pendidikan,
            'no_telepon' => $request->no_telepon
        ]);
        Alert::success('', 'Update bidan berhasil!');

        return redirect('/midwives');
    }

   //delete data
    public function destroy($id)
    {
        Alert::success('', 'Delete data bidan berhasil!');
        Midwife::destroy($id);
        return redirect('/midwives');
    }
}