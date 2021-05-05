<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Task::factory(10)->create();
        // \App\Models\User::factory(10)->create();
    }
}
