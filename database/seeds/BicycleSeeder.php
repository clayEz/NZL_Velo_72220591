<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BicycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=1;$i<100;$i++)
        {
            DB::table('sepeda')->insert([
                'nama' => $faker->sentence(),
                'merek' => $faker->word(),
                'jenis' => $faker->word(),
                'harga' => $faker->randomNumber(5, true),
                'warna' => $faker->safeColorName,
                'tahun' => $faker->year(),
                'poster' => $faker->url(),
                'deskripsi' => $faker->paragraph(2)
            ]);
        }
    }
}
