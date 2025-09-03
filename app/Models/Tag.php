<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // protected $table = 'tags'; // 明示したい場合
    public $timestamps = false;  // マイグレーションでtimestamps作っていないため

    protected $fillable = [
        'name',
    ];

    public function tasks()
    {
        return $this->belongsToMany(Task::class, 'task_tag', 'tag_id', 'task_id');
    }
}
