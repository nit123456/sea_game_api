<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams=[
            [
                'name'=>'Kour Prev',
                'gender'=>'Male',
                'age'=>20,
                'country_id'=>1,
                'competition_id'=>1,
            ],
            [
                'name'=>'Neary Sour',
                'gender'=>'Female',
                'age'=>19,
                'country_id'=>1,
                'competition_id'=>2,
            ],
            [
                'name'=>'Ta Da',
                'gender'=>'Male',
                'age'=>20,
                'country_id'=>2,
                'competition_id'=>1,
            ],
            [
                'name'=>'To Ro',
                'gender'=>'Female',
                'age'=>19,
                'country_id'=>2,
                'competition_id'=>2,
            ]
        ];
        foreach($teams as $team){
            Team::create($team);
        };
    }
}
