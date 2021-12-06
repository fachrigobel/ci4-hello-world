<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PendudukSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 100; $i++) {
            $data = [
                'first_name'    => $faker->firstName(),
                'last_name'     => $faker->lastName(),
                'photo_profile' => 'default.png',
                'gender'        => $faker->randomElement(['male', 'female']),
                'created_at'    => Time::createFromTimestamp($faker->unixTime()),
                'updated_at'    => Time::createFromTimestamp($faker->unixTime()),
            ];

            // Using Query Builder
            $this->db->table('penduduk')->insert($data);
        }
    }
}
