<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries=[
            [
                'name'=>'Cambodia',
            ],
            [
                'name'=>'Thai',
            ],
            [
                'name'=>'Myanmar',
            ],
            [
                'name'=>'Indonesia',
            ],
            [
                'name'=>'Brunie',
            ]
        ];
        foreach($countries as $country){
            Country::create($country);
        };
    }
}
