<?php

namespace Database\Factories;

use App\Models\Ads;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdsDetails>
 */
class AdsDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ads_id'    => Ads::factory(),
            'name_en'   => fake()->name(),
            'name_ar'   => fake()->name(),
            'description_en'    => fake()->text(),
            'description_ar'    => fake()->text(),
        ];
    }
}
