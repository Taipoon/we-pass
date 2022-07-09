<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QualificationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('qualification_types')->insert([
            [
                'label' => '国家資格',
            ],
            [
                'label' => '国家試験',
            ],
            [
                'label' => '民間資格'
            ],
            [
                'label' => '民間試験',
            ],
            [
                'label' => 'その他'
            ],
        ]);
    }
}
