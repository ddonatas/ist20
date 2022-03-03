<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models;
class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Modelsdog::create([
            'suns_vardas' => 'Sarikas',
            'suns_veisle' => 'Terjeras'
        ]);

       
    }
}
