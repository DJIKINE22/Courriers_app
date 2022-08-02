<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\departements;

class CreatedepartementsSeeder extends Seeder

{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {

        $departements = [
            [
               'nom'=>'Informatique',

               'entreprise'=>'1',
            ],
            [
               'nom'=>'Finance',

               'entreprise'=>'1',
            ],


        ];

    

        foreach ($departements as $key => $departement) {

            departements::create($departement);

        }

    }

}