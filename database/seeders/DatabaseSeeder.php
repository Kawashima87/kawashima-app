<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        $this->call([
            TagsSeeder::class,
            TasksSeeder::class,
            TaskTagSeeder::class,
        ]);
    }
}
