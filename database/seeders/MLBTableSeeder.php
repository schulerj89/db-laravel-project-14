<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MLBTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\MLB::class, 50)->create();
    }
}
