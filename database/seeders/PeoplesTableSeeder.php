<?php


namespace Database\Seeders;

use App\Models\Person;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeoplesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('peoples')->delete();

        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Person::create([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'address' => $faker->streetAddress,
                'city' => $faker->city,
                'country' => $faker->country,
            ]);
        }
    }
}