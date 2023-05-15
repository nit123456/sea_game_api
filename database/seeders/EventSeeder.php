<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events=[
            [
                'name'=>'FootballMan',
                'date'=>'2023-05-15',
                'description'=>'ល្អមើលណាស់។',
                'stadium_id'=>1,
                'ticket_number'=>200,
            ],
            [
                'name'=>'Basketball',
                'date'=>'2023-05-15',
                'description'=>'ល្អមើលណាស់។',
                'stadium_id'=>1,
                'ticket_number'=>150,
            ],
            [
                'name'=>'VolleyballMan',
                'date'=>'2023-05-15',
                'description'=>'ល្អមើលណាស់។',
                'stadium_id'=>2,
                'ticket_number'=>200,
            ],
            [
                'name'=>'Volleyball',
                'date'=>'2023-05-15',
                'description'=>'ល្អមើលណាស់។',
                'stadium_id'=>2,
                'ticket_number'=>200,
            ]
        ];
        foreach($events as $event){
            Event::create($event);
        };
    }
}
