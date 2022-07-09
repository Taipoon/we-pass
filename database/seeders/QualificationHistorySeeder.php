<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QualificationHistorySeeder extends Seeder
{
    public function run()
    {
        DB::table('qualification_histories')->insert([
            [
                'acquisition_datetime' => Carbon::now(),
                'user_id' => 1,
                'qualification_id' => 1,
            ],
            [
                'acquisition_datetime' => Carbon::now(),
                'user_id' => 1,
                'qualification_id' => 2,
            ],
        ]);
    }
}
