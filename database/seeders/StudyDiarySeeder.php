<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use COM;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudyDiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('study_diaries')->insert([
            [
                'minutes' => 120,
                'memo' => '今日は頑張った。',
                'user_id' => User::where('id', 1)->first()->id,
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
