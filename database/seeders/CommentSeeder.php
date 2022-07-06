<?php

namespace Database\Seeders;

use App\Models\Thread;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'content' => 'こんちは!実は僕もその問題を回答しようか迷ったのですが、ネットワーク系の問題は難易度の振れ幅が大きいので避けました(笑)',
                'user_id' => User::where('id', 1)->first()->id,
                'thread_id' => Thread::where('id', 1)->first()->id,
            ],
        ]);
    }
}
