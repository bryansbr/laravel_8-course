<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FootballTeam;

class FootballTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        FootballTeam::factory(10)->create();
        
        // // Real Madrid C.F.
        // $team = new FootballTeam(); // Instancia el modelo.
        // $team->name = 'Real Madrid C.F.';
        // $team->country = 'Spain';
        // $team->confederation = 'UEFA';
        // $team->foundation_year = 1902;
        // $team->titles = 105;
        // $team->stadium = 'Santiago Bernabeu';
        // $team->save(); // Para almacenar en BD.

        // // F.C. Barcelona
        // $team2 = new FootballTeam(); // Instancia el modelo.
        // $team2->name = 'F.C. Barcelona';
        // $team2->country = 'Spain';
        // $team2->confederation = 'UEFA';
        // $team2->foundation_year = 1899;
        // $team2->titles = 102;
        // $team2->stadium = 'Camp Nou';
        // $team2->save(); // Para almacenar en BD.

        // // Deportivo Cali
        // $team3 = new FootballTeam(); // Instancia el modelo.
        // $team3->name = 'Deportivo Cali';
        // $team3->country = 'Colombia';
        // $team3->confederation = 'CONMEBOL';
        // $team3->foundation_year = 1912;
        // $team3->titles = 11;
        // $team3->stadium = 'Deportivo Cali';
        // $team3->save(); // Para almacenar en BD.

        // // America de Cali
        // $team4 = new FootballTeam(); // Instancia el modelo.
        // $team4->name = 'America de Cali';
        // $team4->country = 'Colombia';
        // $team4->confederation = 'CONMEBOL';
        // $team4->foundation_year = 1927;
        // $team4->titles = 16;
        // $team4->stadium = 'Puente de La 25';
        // $team4->save(); // Para almacenar en BD.
    }
}
