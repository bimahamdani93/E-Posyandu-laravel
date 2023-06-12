<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Education;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Education::create([
            'jenjang' => 'D-III',
        ]);

        Education::create([
            'jenjang' => 'D-IV',
        ]);

        Education::create([
            'jenjang' => 'S-1',
        ]);
    }
}
