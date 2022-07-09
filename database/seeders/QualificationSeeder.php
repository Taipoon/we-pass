<?php

namespace Database\Seeders;

use App\Models\QualificationType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QualificationSeeder extends Seeder
{
    public function run()
    {
        DB::table('qualifications')->insert(
            [
                [
                    'name' => 'ITパスポート',
                    'remarks' => '情報処理推進機構の国家試験で、レベル1に相当します。',
                    'qualification_type_id' => QualificationType::where('label', '国家試験')->first()->id,
                ],
                [
                    'name' => '基本情報技術者試験',
                    'remarks' => '情報処理推進機構の国家試験で、レベル2に相当します。',
                    'qualification_type_id' => QualificationType::where('label', '国家試験')->first()->id,
                ],
                [
                    'name' => '応用情報技術者試験',
                    'remarks' => '情報処理推進機構の国家試験で、レベル3に相当します。',
                    'qualification_type_id' => QualificationType::where('label', '国家試験')->first()->id,
                ],
                [
                    'name' => '情報処理安全確保支援士',
                    'remarks' => '情報処理推進機構の唯一の国家資格です。',
                    'qualification_type_id' => QualificationType::where('label', '国家資格')->first()->id,
                ],
            ]
        );
    }
}
