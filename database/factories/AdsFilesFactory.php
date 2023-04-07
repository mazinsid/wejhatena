<?php

namespace Database\Factories;

use App\Models\AdsDetails;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdsFiles>
 */
class AdsFilesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ads_details_id'    =>  AdsDetails::factory(),
            'name'              => "10.jpg",
            'display_name'      => "pic_11680299868",
            'file_type'         => "image/jpeg",
        ];
    }
}
