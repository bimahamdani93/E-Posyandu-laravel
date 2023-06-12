<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Education;
use App\Models\VaccinationSchedule;

class Midwife extends Model
{
    use HasFactory;

    //satu midwife memiliki satu education
    public function education()
    {
        return $this->belongsTo(Education::class, 'id_pendidikan');
    }


    //satu midwife memiliki banyak schedule
    public function vaccination_schedule()
    {
        return $this->hasMany(VaccinationSchedule::class);
    }
}
