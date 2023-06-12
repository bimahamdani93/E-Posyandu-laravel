<?php

namespace App\Http\Controllers;

use App\Models\VaccinationRegistration;
use App\Models\VaccinationSchedule;
use App\Models\Child;
use Illuminate\Http\Request;
Use Alert;

class VaccinationRegistrationController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
   
    //read data
    public function index()
    {
        $vaccination_registrations = VaccinationRegistration::all();     
        return view('vaccination-registrations.index', compact('vaccination_registrations'));
    }

    //create page
    public function create()
    {
        return view('vaccination-registrations.create',[
            'vaccination_schedules' => VaccinationSchedule::all(),
            'children' => Child::all()
        ]);
    }

    //create data
    public function store(Request $request)
    {
        $vaccination_registrations = new VaccinationRegistration;
        $vaccination_registrations->id_jadwal = $request["id_jadwal"]; 
        $vaccination_registrations->id_anak = $request["id_anak"]; 
        $vaccination_registrations->waktu_daftar = $request["waktu_daftar"]; 
        $vaccination_registrations->save(); 
        Alert::success('', 'Registrasi vaksin berhasil!');
        return redirect('/vaccination-registrations');
    }

    //edit page
    public function edit($id)
    {
        return view('vaccination-registrations.edit', [
            'vaccination_registration' => VaccinationRegistration::find($id),
            'vaccination_schedules' => VaccinationSchedule::all(),
            'children' => Child::all()
        ]);
    }

    //Update Data
    public function update(Request $request, $id)
    {
        $update = VaccinationRegistration::where('id', $id)->update([
            'id_jadwal' => $request->id_jadwal,
            'id_anak' => $request->id_anak,
            'waktu_daftar' => $request->waktu_daftar,
        ]);
        Alert::success('', 'Update pendaftaran berhasil!');
        return redirect('/vaccination-registrations');
    }

    //Delete data
    public function destroy(VaccinationRegistration $vaccinationRegistration)
    {
        Alert::success('', 'Batalkan Pendaftaran berhasil!');
        VaccinationRegistration::destroy($id);
        return redirect('/vaccination-registrations');
    }
}