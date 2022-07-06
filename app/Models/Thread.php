<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    /**
     * ThreadType とのリレーション
     * 
     * スレッドタイプを返す
     */
    public function type()
    {
        return $this->belongsTo(
            ThreadType::class,
            'thread_type_id',
            'id',
        );
    }

    /**
     * User とのリレーション
     * 
     * スレッドを作成したユーザーを返す
     */
    public function user()
    {
        return $this->belongsTo(
            User::class,
            'user_id',
            'id'
        );
    }

    /**
     * Comment とのリレーション
     * 
     * スレッドに投稿されたコメントを返す
     */
    public function comments()
    {
        return $this->hasMany(
            Comment::class,
            'thread_id',
            'id',
        );
    }
}
