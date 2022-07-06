<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quiz_types')->insert([
            [
                'label' => '単語カード',
            ],
            [
                'label' => '選択問題',
            ],
            [
                'label' => '回答入力',
            ],
        ]);
    }
}
