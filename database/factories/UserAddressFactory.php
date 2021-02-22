<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UserAddress;
use Faker\Generator as Faker;

$factory->define(UserAddress::class, function (Faker $faker) {
    $addresses = [
        ["NSW", "Sydney"],
        ["QLD", "Brisbane"],
        ["SA", "Adelaide"],
        ["TAS", "Hobart"],
        ["VIC", "Melbourne"],
        ["WA", "Perth"],
    ];
    $address   = $faker->randomElement($addresses);

    $state = $faker->stateAbbr;
    $city = $faker->city;
    $postcode = $faker->postcode;
    $streetAddress = $faker->streetAddress;

    return [
        'state'      => $state,
        'city'          => $city,
        'address'       => sprintf('%s, %s %s %s', $streetAddress, $city, $state, $postcode),
        'postcode'           => $postcode,
        'contact_name'  => $faker->name,
        'contact_phone' => $faker->phoneNumber,
    ];
});
