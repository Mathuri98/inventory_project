<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //

             'name'=> fake()->word(), 
            'description'=> fake()->sentence(), 
            'active'=> true, 
            'user_id'=>User::factory(), 
            'category_id'=> Category::factory(), 
            'price'=> "$35"


        ];
    }
}
