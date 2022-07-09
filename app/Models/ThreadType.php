<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThreadType extends Model
{
    use HasFactory;

    /**
     * Thread とのリレーション
     * 
     * それぞれのスレッドタイプに属するスレッドを返す
     */
    public function threads()
    {
        return $this->hasMany(
            Thread::class,
            'thread_type_id',
            'id'
        );
    }
}
