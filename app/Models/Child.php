<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VaccinationRegistration;

class Child extends Model
{
    use HasFactory;

     //satu anak memiliki banyak registrasi
     public function vaccination_registration()
     {
         return $this->hasMany(VaccinationRegistration::class);
     }


}
