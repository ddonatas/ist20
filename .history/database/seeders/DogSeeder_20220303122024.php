<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\dog::create([
            'suns_vardas' => 'A New Hope',
            'suns_veisle' => '1977'
        ]);

       
    }
}
