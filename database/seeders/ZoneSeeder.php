<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Zone;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $zones=[
            [
                'zone'=>'A',
                'stadium_id'=>1,
            ],
            [
                'zone'=>'B',
                'stadium_id'=>1,
            ],
            [
                'zone'=>'A',
                'stadium_id'=>2,
            ],
            [
                'zone'=>'B',
                'stadium_id'=>2,
            ]
        ];
        foreach($zones as $zone){
            Zone::create($zone);
        };
    }
}
