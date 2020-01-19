<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        "nama" => $faker->name,
        "email" => $faker->freeEmail,
        "password" => "888888",
        "tgl" => $faker->dateTimeBetween('-10 year','now'),
        "telepon" => $faker->phoneNumber,
        "username" => $faker->name,
        "alamat" => "Medan"
    ];
});
