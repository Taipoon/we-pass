<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QualificationType extends Model
{
    use HasFactory;

    /**
     * Qualification とのリレーション
     * 
     * 種別ごとの資格を返す
     */
    public function qualifications()
    {
        return $this->hasMany(
            Qualification::class,
            'qualification_type_id',
            'id'
        );
    }
}
