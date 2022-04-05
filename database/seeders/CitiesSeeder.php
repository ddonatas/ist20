<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cities;
class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        cities::create([
            'city' => 'Siauliai',
        ]);
        cities::create([
            'city' => 'Vilnius',
        ]);
        cities::create([
            'city' => 'Klaideda',
        ]);
    }
}
