<?php

namespace Database\Seeders;

use App\Models\Territory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TerritorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Territory::insert([
            ['name' => 'Alaska'],
            ['name' => 'Canada'],
            ['name' => 'Nunavut'],
            ['name' => 'Greenland'],
            ['name' => 'Iceland'],
            ['name' => 'Quebec'],
            ['name' => 'North East USA'],
            ['name' => 'South East USA'],
            ['name' => 'South West USA'],
            ['name' => 'North West USA'],
            ['name' => 'Caribbean'],
            ['name' => 'Mexico'],
            ['name' => 'Colombia'],
            ['name' => 'Brazil'],
            ['name' => 'Argentina'],
            ['name' => 'United Kingdom'],
            ['name' => 'West Europe'],
            ['name' => 'East Europe'],
            ['name' => 'Scandinavia'],
            ['name' => 'Svalbard'],
            ['name' => 'West Russia'],
            ['name' => 'Russia'],
            ['name' => 'Siberia'],
            ['name' => 'Japan'],
            ['name' => 'Korea'],
            ['name' => 'China'],
            ['name' => 'Mongolia'],
            ['name' => 'Kazakhstan'],
            ['name' => 'Afghanistan'],
            ['name' => 'Iran'],
            ['name' => 'Turkey'],
            ['name' => 'Arabia'],
            ['name' => 'Egypt'],
            ['name' => 'Nigeria'],
            ['name' => 'Congo'],
            ['name' => 'Ethiopia'],
            ['name' => 'South Africa'],
            ['name' => 'Madagascar'],
            ['name' => 'India'],
            ['name' => 'Thailand'],
            ['name' => 'Philippines'],
            ['name' => 'Indonesia'],
            ['name' => 'Papua New Guinea'],
            ['name' => 'Australia'],
            ['name' => 'New Zealand'],
            ['name' => 'Antarctica'],
        ]);
    }
}
