<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::truncate();

        $csvFile = fopen(base_path('database/data/country.csv'), 'r');

        $gotHeader = false;

        while(($data = fgetcsv($csvFile, 2000, ',')) != FALSE)
        {
            if($gotHeader)
            {
                Country::create([
                    'code' => $data[0],
                    'name' => $data[1],
                ]);
            }
            $gotHeader = true;
        }

        fclose($csvFile);
    }
}
