<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\entreprises;

class CreateentreprisesSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

        $entreprises = [

            [
               'nom'=>'G4',

               'structure'=>'Privée',

               'adresse'=>'Bamako',
            ],

        ];

        foreach ($entreprises as $key => $entreprise) {

            entreprises::create($entreprise);
        }

    }

}