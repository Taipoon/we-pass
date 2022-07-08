<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\QuizType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes')->insert([
            [
                'quiz_type_id' => QuizType::where('label', '単語カード')->first()->id,
                'question' => 'データベースにおいて更新時異常を防ぐために行う設計上のルールをなんというか',
                'answer1' => '正規化',
                'user_id' => 1,
            ],
            [
                'quiz_type_id' => QuizType::where('label', '回答入力')->first()->id,
                'question' => 'コンピュータの5大要素とは、制御装置、記憶装置、出力装置、入力装置と、「xxx」である。xxx に入る言葉を漢字4文字で答えよ。',
                'answer1' => '演算装置',
                'user_id' => 1,
            ],
        ]);
    }
}
