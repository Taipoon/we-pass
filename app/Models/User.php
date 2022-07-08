<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Thread とのリレーション
     * 
     * 投稿したスレッドを返す
     */
    public function threads()
    {
        return $this->hasMany(
            Thread::class,
            'user_id',
            'id',
        );
    }

    /**
     * Comment とのリレーション
     * 
     * 投稿したコメントを返す
     */
    public function comments()
    {
        return $this->hasMany(
            Comment::class,
            'user_id',
            'id',
        );
    }

    /**
     * StudyDiary とのリレーション
     * 
     * 投稿した日記を返す
     */
    public function studyDiaries()
    {
        return $this->hasMany(
            StudyDiary::class,
            'user_id',
            'id',
        );
    }

    /**
     * QualificationHistory とのリレーション
     * 
     * 合格した資格等を返す
     */
    public function qualifications()
    {
        return $this->belongsToMany(
            Qualification::class,
            'qualification_histories',
            'user_id',
            'qualification_id',
        );
    }

    /**
     * Quiz とのリレーション
     * 
     * 投稿したクイズを返す
     */
    public function quizzes()
    {
        return $this->hasMany(
            Quiz::class,
            'user_id',
            'id',
        );
    }
}
