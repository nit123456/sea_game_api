<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ticket;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tickets=[
            [
                'event_id'=>1,
                'zone_id'=>1,
            ],
            [
                'event_id'=>2,
                'zone_id'=>1,
            ],
            [
                'event_id'=>1,
                'zone_id'=>2,
            ],
            [
                'event_id'=>3,
                'zone_id'=>1,
            ],
            [
                'event_id'=>1,
                'zone_id'=>1,
            ],
            [
                'event_id'=>4,
                'zone_id'=>1,
            ]

        ];
        foreach($tickets as $ticket){
            Ticket::create($ticket);
        };
    }
}
