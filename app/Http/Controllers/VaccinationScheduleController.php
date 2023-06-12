<?php

namespace App\Http\Controllers;

use App\Models\VaccinationSchedule;
use App\Models\CategoryVaccine;
use App\Models\Midwife;
use Illuminate\Http\Request;
Use Alert;

class VaccinationScheduleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
   
    //read data
    public function index()
    {
        $vaccination_schedules = VaccinationSchedule::all();     
        return view('vaccination_schedules.index', compact('vaccination_schedules'));
    }

    //create page
    public function create()
    {
        return view('vaccination_schedules.create',[
            'category_vaccines' => CategoryVaccine::all(),
            'midwifes' => Midwife::all()
        ]);
    }

    //Create data
    public function store(Request $request)
    {
        $vaccination_schedules = new VaccinationSchedule;
        $vaccination_schedules->id_bidan = $request["id_bidan"]; 
        $vaccination_schedules->id_kategori = $request["id_kategori"]; 
        $vaccination_schedules->hari = $request["hari"]; 
        $vaccination_schedules->tanggal = $request["tanggal"]; 
        $vaccination_schedules->jam = $request["jam"]; 
        $vaccination_schedules->kuota = $request["kuota"]; 
        $vaccination_schedules->save(); 
        Alert::success('', 'Tambah jadwal berhasil!');
        return redirect('/vaccination-schedules');
    }

   //edit data
    public function edit($id)
    {
        return view('vaccination_schedules.edit', [
            'vaccination_schedule' => VaccinationSchedule::find($id),
            'category_vaccines' => CategoryVaccine::all(),
            'midwifes' => Midwife::all()
        ]);
    }

    //update data
    public function update(Request $request, $id)
    {
        $update = VaccinationSchedule::where('id', $id)->update([
            'id_bidan' => $request->id_bidan,
            'id_kategori' => $request->id_kategori,
            'hari' => $request->hari,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'kuota' => $request->kuota,
        ]);
        Alert::success('', 'Update jadwal vaksin berhasil!');
        return redirect('/vaccination-schedules');
    }

    //hapus data
    public function destroy($id)
    {
        Alert::success('', 'Hapus jadwal vaksin berhasil!');
        VaccinationSchedule::destroy($id);
        return redirect('/vaccination-schedules');
    }
}