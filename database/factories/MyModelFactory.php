<?php

namespace Mostafabozorgzade\Example\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Mostafabozorgzade\Example\MyModel;

class MyModelFactory extends Factory
{
    protected $model = MyModel::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
