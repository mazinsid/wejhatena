<?php

namespace Database\Factories;

use App\Models\AdsTypes;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ads>
 */
class AdsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id'       => Category::inRandomOrder()->first(),
            'subcategory_id'    => Subcategory::inRandomOrder()->first(),
            'type_id'           => AdsTypes::inRandomOrder()->first(),
            'user_id'           => User::inRandomOrder()->first(),
            'folder_name'       => fake()->name(),
            'approved_by'       => User::inRandomOrder()->first(),
            'view_count'        => fake()->numberBetween(10, 1000),
            'status'            => 0,
            'country_id'        => Country::inRandomOrder()->first(),
            'city_id'           => City::inRandomOrder()->first(),
        ];
    }
}
