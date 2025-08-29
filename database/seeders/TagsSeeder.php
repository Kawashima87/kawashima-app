<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsSeeder extends Seeder {
    public function run(): void {
        DB::table('tags')->insert([
            ['name' => '買い物'],
            ['name' => '仕事'],
            ['name' => '家事'],
            ['name' => '趣味'],
            ['name' => '健康'],
        ]);
    }
}
