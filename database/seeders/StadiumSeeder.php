<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stadium;

class StadiumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stadiums=[
            [
                'name'=>'Morodok Dekjor',
                'address'=>'Phnom Penh',
                'seats'=>20000,
            ],
            [
                'name'=>'Uor Lampich',
                'address'=>'Phnom Penh',
                'seats'=>10000,
            ]
        ];
        foreach($stadiums as $stadium){
            Stadium::create($stadium);
        };
    }
}
