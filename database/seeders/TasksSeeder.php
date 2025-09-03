<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksSeeder extends Seeder {
    public function run(): void {
        $titles = [
            '牛乳を買う',
            'ティッシュペーパーを買う',
            '議事録作成',
            '自宅の環境構築',
            '毎日のストレッチ',
            '洗濯をする',
            '買った本を読む',
            '朝ご飯を食べる',
            'メールを確認する',
            '夜ご飯を作る',
        ];

        $rows = [];
        foreach ($titles as $i => $title) {
            $rows[] = [
                'title'      => $title,
                'status'     => 1,
                'sortNumber' => $i + 1, // 1から順に
                // createDate / UpdateDate は省略 → DBが自動で現在時刻を入れる
            ];
        }

        DB::table('tasks')->insert($rows);
    }
}
