<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    /**
     * User とのリレーション
     * 
     * 投稿したユーザーを返す
     */
    public function user()
    {
        return $this->belongsTo(
            User::class,
            'user_id',
            'id',
        );
    }
}
