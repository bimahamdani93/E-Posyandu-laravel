<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Midwife;

class Education extends Model
{
    use HasFactory;

    public function midwives()
    {
        return $this->hasMany(Midwife::class);
    }
}
