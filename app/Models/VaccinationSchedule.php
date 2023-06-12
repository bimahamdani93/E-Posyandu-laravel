<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Midwife;
use App\Models\CategoryVaccine;
use App\Models\VaccinationRegistration;

class VaccinationSchedule extends Model
{
    use HasFactory;

     //satu schedule dimiliki satu kategori
     public function category()
     {
         return $this->belongsTo(CategoryVaccine::class, 'id_kategori');
     }

    //satu schedule dimiliki satu bidan
    public function midwife()
    {
        return $this->belongsTo(Midwife::class, 'id_bidan');
    }


     //satu schedule memiliki banyak registrasi
     public function vaccination_registration()
     {
         return $this->hasMany(VaccinationRegistration::class);
     }
}
