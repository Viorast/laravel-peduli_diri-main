<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\facades\DB;
use App\Models\User;

class PerjalananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 20; $i++) {

            DB::table('perjalanans')->insert([
                'id_user' =>  User::all()->random()->id,
                'lokasi'  => $faker->state,
                'tanggal' => $faker->date,
                'jam'    => $faker->time,
                'suhu'   => $faker->randomFloat(0, 30, 50)
            ]);
        }

    }
}
