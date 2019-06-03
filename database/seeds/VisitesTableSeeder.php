<?php

use Illuminate\Database\Seeder;
use App\Visite;

class VisitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Visite::truncate();
        Visite::create([
            'status' => NULL, 
            'jourVisite' => \Carbon\Carbon::createFromDate('2019-06-06')->toDateString(),
            'heureVisite' => \Carbon\Carbon::createFromTime(17,45)->toTimeString(),
            'compteRendu' => NULL, 
            'idEchantillon' => '1',
            'idPraticien' => '1',
            'idVisiteur' => '2',
        ]);
        Visite::create([
            'status' => NULL, 
            'jourVisite' => \Carbon\Carbon::createFromDate('2019-06-07')->toDateString(),
            'heureVisite' => \Carbon\Carbon::createFromTime(12,30)->toTimeString(),
            'compteRendu' => NULL, 
            'idEchantillon' => '1',
            'idPraticien' => '2',
            'idVisiteur' => '2',
        ]);
        Visite::create([
            'status' => NULL, 
            'jourVisite' => \Carbon\Carbon::createFromDate('2019-06-08')->toDateString(),
            'heureVisite' => \Carbon\Carbon::createFromTime(10,20)->toTimeString(),
            'compteRendu' => NULL, 
            'idEchantillon' => '2',
            'idPraticien' => '2',
            'idVisiteur' => '3',
        ]);

    } 
}
