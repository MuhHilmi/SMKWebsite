<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        foreach (range(1, 100) as $index) {
            DB::table('student')->insert([
                'nama' => $faker->name,
                'jenisKelamin' => $faker->randomElement(['L', 'P']),
                'kelas' => $faker->randomElement(['X', 'XI', 'XII']),
                'jurusan' => $faker->randomElement(['Askep', 'Farmasi', 'TLM']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
