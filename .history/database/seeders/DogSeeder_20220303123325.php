<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dog;
class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dog::create([
            'suns_vardas' => 'Sarikas',
            'suns_veisle' => 'Terjeras'
        ]);
        dog::create([
            'suns_vardas' => 'Mikis',
            'suns_veisle' => 'Dogas'
        ]);

       
    }
}
