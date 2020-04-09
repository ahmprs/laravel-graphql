<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $password = bcrypt('secret');

        for ($i = 0; $i < 10; ++$i) {
            DB::table('users')->insert([
                'id' => null,
                'name' => $faker->name,
                'email' => $faker->email,
                'email_verified_at' => '2020-04-01 00:00:00',
                'password' => $password,
                'api_token' => '',
                'remember_token' => '',
                'created_at' => '2020-04-01 00:00:00',
                'updated_at' => '2020-04-01 00:00:00',
            ]);

        }
    }
}
