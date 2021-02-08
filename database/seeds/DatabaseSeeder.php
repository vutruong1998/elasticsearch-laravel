<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $faker = Factory::create();
        for ($i = 1; $i < 50; $i++) {
            $data[] = [
                'title' => $faker->sentence(3),
                'content' => $faker->paragraph(6)
            ];
        }
        DB::table('posts')->insert($data);
    }
}
