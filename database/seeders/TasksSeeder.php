<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksSeeder extends Seeder {
    public function run(): void {
        DB::table('tasks')->insert([
            ['title' => '牛乳を買う',         'status' => 1],
            ['title' => 'ティッシュペーパーを買う', 'status' => 1],
            ['title' => '議事録作成',         'status' => 1],
            ['title' => '自宅の環境構築',     'status' => 1],
            ['title' => '毎日のストレッチ',   'status' => 1],
            ['title' => '洗濯をする',         'status' => 1],
            ['title' => '買った本を読む',     'status' => 1],
            ['title' => '朝ご飯を食べる',     'status' => 1],
            ['title' => 'メールを確認する',   'status' => 1],
            ['title' => '夜ご飯を作る',       'status' => 1],
        ]);
    }
}
