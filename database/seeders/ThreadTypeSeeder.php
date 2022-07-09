<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThreadTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('thread_types')->insert([
            [
                'label' => '教えて先輩',
            ],
            [
                'label' => '雑談',
            ],
            [
                'label' => '回答募集',
            ],
        ]);
    }
}
