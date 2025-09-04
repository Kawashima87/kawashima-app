<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $fillable = [//一括で値を保存、更新したいカラムを設定(勝手に指定していないデータを変更されないようにするため);
        'title',
        'body',
        'user_id',
    ];
}
