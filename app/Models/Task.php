<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // テーブル名はデフォルトで "tasks" なので指定不要だが、明示しておくなら↓
    // protected $table = 'tasks';

    // Eloquentのタイムスタンプを有効化しつつ、カラム名を独自名に変更
    public $timestamps = true;
    const CREATED_AT = 'createDate';
    const UPDATED_AT = 'UpdateDate';

    // 一括代入を許可するカラム
    protected $fillable = [
        'title',
        'status',
        'sortNumber',
        'createDate',
        'UpdateDate',
    ];

    // 多対多: Task ↔ Tag（中間テーブル: task_tag）
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'task_tag', 'task_id', 'tag_id');
    }

    // よく使う並び（表示順）をデフォルトにしたい場合はスコープ
    public function scopeSorted($query)
    {
        return $query->orderBy('sortNumber', 'asc')->orderBy('id', 'asc');
    }
}
