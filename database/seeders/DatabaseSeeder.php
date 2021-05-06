<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \DB::table('reports')->insert([
            'id' => 123,
            'reportdate' => '2021-05-05',
            'profitloss' => '5000',
            ]);
    }
}
