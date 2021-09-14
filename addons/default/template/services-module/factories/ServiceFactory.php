<?php

$factory->define(
    Template\ServicesModule\Service\ServiceModel::class,
    function (Faker\Generator $faker) {
        return [
            'name' => $faker->word(),
            'slug' => $faker->slug(),
            'title' => $faker->word(),
            'subtitle' => $faker->word(3),
            'description' => $faker->sentence(5),
            'images' => $faker->image(),
            'on_home' => false,
            'active' => false,
        ];
    }
);
