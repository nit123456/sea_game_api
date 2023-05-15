<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Competition;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $competions=[
            [
                'startTime'=>'15:30',
                'event_id'=>1,
                'stadium_id'=>1,
            ],
            [
                'startTime'=>'17:00',
                'event_id'=>2,
                'stadium_id'=>1,
            ],
            [
                'startTime'=>'14:00',
                'event_id'=>3,
                'stadium_id'=>1,
            ],
            [
                'startTime'=>'17:00',
                'event_id'=>4,
                'stadium_id'=>2,
            ]
        ];
        foreach($competions as $competition){
            Competition::create($competition);
        };
    }
}
