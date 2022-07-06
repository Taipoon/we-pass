<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            // ダミーユーザー
            UserSeeder::class,

            // 資格種別
            QualificationTypeSeeder::class,

            // 資格ダミーデータ
            QualificationSeeder::class,

            // 資格履歴
            QualificationHistorySeeder::class,

            // スレッド種別            
            ThreadTypeSeeder::class,
            // スレッド投稿
            ThreadSeeder::class,
            // コメント
            CommentSeeder::class,

            // クイズ種別
            QuizTypeSeeder::class,
            // クイズ
            QuizSeeder::class,

            // 勉強日記
            StudyDiarySeeder::class,
        ]);
    }
}
