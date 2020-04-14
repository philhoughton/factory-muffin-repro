<?php
$faker = Faker\Factory::create('en_gb');
/** @var \League\FactoryMuffin\FactoryMuffin $fm */
$fm->define(\App\Entity\User::class)->setDefinitions([
    'username'      => $faker->email,
    'firstName'     => $faker->firstName,
    'lastName'      => $faker->lastName
]);