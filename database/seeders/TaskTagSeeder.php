<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskTagSeeder extends Seeder {
    public function run(): void {
        DB::table('task_tag')->insert([
            ['task_id' => 1, 'tag_id' => 1], // (1, '買い物')
            ['task_id' => 3, 'tag_id' => 2], // (3, '仕事')
        ]);
    }
}