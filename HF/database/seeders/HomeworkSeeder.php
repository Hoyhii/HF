<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Homework;

class HomeworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Homework::factory(7)->create();
    }
}
