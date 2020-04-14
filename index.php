<?php

use League\FactoryMuffin\FactoryMuffin;
use League\FactoryMuffin\Stores\RepositoryStore;

include 'bootstrap.php';

$factoryMuffin = new FactoryMuffin(new RepositoryStore($entityManager));
$factoryMuffin->loadFactories(__DIR__.'/factories');

// this works
$factoryMuffin->create(\App\Entity\User::class, [
    'firstName' => 'Maxwell'
]);

// This doesn't work because its the same as a built in function, ie max()
$factoryMuffin->create(\App\Entity\User::class, [
    'firstName' => 'Max'
]);

// neither does this
$factoryMuffin->create(\App\Entity\User::class, [
    'firstName' => 'Abs'
]);

// or this
$factoryMuffin->create(\App\Entity\User::class, [
    'firstName' => 'Floor'
]);



