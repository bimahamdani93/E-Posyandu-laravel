<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VaccinationSchedule;
use App\Models\Child;

class VaccinationRegistration extends Model
{
    use HasFactory;

      //satu registrasi dimiliki satu jadwal
      public function schedule()
      {
          return $this->belongsTo(VaccinationSchedule::class, 'id_jadwal');
      }
 
     //satu registrasi dimiliki satu anak
     public function child()
     {
         return $this->belongsTo(Child::class, 'id_anak');
     }
}
