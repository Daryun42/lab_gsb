<?php

use Illuminate\Database\Seeder;
use App\Echantillon;
class EchantillonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Echantillon::truncate();
        Echantillon::create([
            'idMedicament' => '1', 
            'quantite' => '-1', 
        ]);
        Echantillon::create([
            'idMedicament' => '2', 
            'quantite' => '-1', 
        ]);
    }
}
