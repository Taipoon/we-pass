<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    /**
     * QualificationType とのリレーション
     * 
     * 資格種別を返す
     */
    public function type()
    {
        return $this->belongsTo(
            QualificationType::class,
            'qualification_type_id',
            'id'
        );
    }

    /**
     * User とのリレーション
     * 
     * 資格ごとに、保有しているユーザーを返す
     */
    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'qualification_histories',
            'qualification_id',
            'user_id',
        );
    }
}
