<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Company;
use App\Employee;

use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'First name' => $faker->firstName(),
        'Last name' => $faker->lastName(),
        'email' => $faker->email(),
        'phone' => $faker->phoneNumber(),
        'company_id' => Company::all()->random()->id,
    ];
});
