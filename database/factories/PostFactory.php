<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}

use Faker\Generator as Faker;
    
    
    $factory->define(App\Post::class, function (Faker $faker) {
        return [
            'title' => $faker->sentence(3, true),
            'content' => $faker->realText($faker->numberBetween(10, 100))
        ];
        
    });
