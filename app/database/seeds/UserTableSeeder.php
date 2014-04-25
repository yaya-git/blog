<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create('es_ES');
        
        User::truncate();

        foreach(range(1, 10) as $index)
        {
            User::create(array(
                'email' => $faker->email,
                'password' => Hash::make('123456'),
                'first_name' => $faker->name,
                'last_name' => $faker->lastName
            ));
        }
    }

}