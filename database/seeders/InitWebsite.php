<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\AdsFiles;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InitWebsite extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
            // Subcategory::factory(10)->create();
            // Country::factory(10)->create();
            // City::factory(10)->create();
            AdsFiles::factory(10)->create();
        });
    }
}
