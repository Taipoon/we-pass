<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quiz_histories')->insert([
            [
                'user_id' => User::where('id', 1),
                'quiz_id' => Quiz::where('id', 1),
                'datetime' => Carbon::now(),
                'result' => true,
            ],
            [
                'user_id' => User::where('id', 1),
                'quiz_id' => Quiz::where('id', 2),
                'datetime' => Carbon::now(),
                'result' => false,
            ],

        ]);
    }
}
