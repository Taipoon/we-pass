<?php

namespace Database\Seeders;

use App\Models\ThreadType;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('threads')->insert([
            [
                'title' => 'みなさんは今回の応用情報午後問題、どれを選択しましたか?',
                'user_id' => User::where('id', 1)->first()->id,
                'thread_type_id' => ThreadType::where('label', '雑談')->first()->id,
            ],
        ]);
    }
}
