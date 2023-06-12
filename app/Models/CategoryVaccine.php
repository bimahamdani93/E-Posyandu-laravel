<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\VaccinationSchedule;

class CategoryVaccine extends Model
{
    use HasFactory;

    //1 kategori memiliki banyak jadwal
    public function vaccinationSchedules()
    {
        return $this->hasMany(VaccinationSchedule::class);
    }
}
