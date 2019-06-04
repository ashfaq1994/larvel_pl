<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Room;
use App\RoomType;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});




$factory->define(Room::class, function (Faker $faker) {
    $name = $faker->sentence();
    return [
        'name' => $name,
        'slug' => $name,
        'room_type_id' => function ()
        {
           return factory('App\RoomType')->create()->id;  
        },
        'feature_img' => $faker->imageUrl($width = 640, $height = 480),
        'no_adults' => $faker->numberBetween(1,3),
        'no_childs' => $faker->numberBetween(1,2),
        'price' => $faker->numberBetween(1000,9000),
    ];
});



$factory->define(RoomType::class, function (Faker $faker) {
    $name = $faker->sentence();
    return [
        'name' => $name,
        'slug' => $name,
        'no_room' => $faker->numberBetween(1,4),
        'capacity' => $faker->numberBetween(1,4),
    ];
});