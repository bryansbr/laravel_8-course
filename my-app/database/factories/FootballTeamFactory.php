<?php

namespace Database\Factories;

use App\Models\FootballTeam;
use Illuminate\Database\Eloquent\Factories\Factory;
//use Illuminate\Support\Str;

class FootballTeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = FootballTeam::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->randomElement([
                    'Real Madrid C.F.',
                    'F.C. Barcelona',
                    'Chelsea F.C.',
                    'Deportivo Cali',
                    'America de Cali',
                    'C. A. River Plate',
                    'C. F. Monterrey',
                    'Kashima Antlers',
                    'Auckland City F.C.',
                    'Al-Ahly S.C.']
                ),
            'country' => $this->faker->country(),
            'confederation' => $this->faker->randomElement([
                'UEFA', 
                'CONMEBOL',
                'CONCACAF', 
                'OFC',
                'CAF']
            ),
            'foundation_year' => $this->faker->numberBetween($min = 1888, $max = 1970),
            'titles' => $this->faker->numberBetween($min = 0, $max = 120),
            'stadium' => $this->faker->randomElement([
                'Santiago Bernabeu', 
                'Camp Nou', 
                'Stamford Bridge',
                'Wembley Stadium', 
                'Deportivo Cali',
                'Olimpico Pascual Guerrero',
                'El Monumental',
                'Wanda Metropolitano',
                'BBVA Bancomer',
                'Borg El Arab']
            ),
        ];
    }
}
