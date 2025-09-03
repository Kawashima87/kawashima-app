<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskTag extends Model
{
    protected $table = 'task_tag';
    public $timestamps = false;

    // 複合キーのため、主キー自動増分を無効化
    public $incrementing = false;

    // 主キー型の宣言（念のため）
    protected $keyType = 'int';

    // 一括代入許可
    protected $fillable = [
        'task_id',
        'tag_id',
    ];
}
