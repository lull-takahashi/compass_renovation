<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Users\Subjects;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()//Eloquentで記述
    {
        Subjects::create([
            'subject' => '国語',
        ]);

        Subjects::create([
            'subject' => '数学',
        ]);

        Subjects::create([
            'subject' => '英語',
        ]);
    }
}

//ほかの書き方
//①insert()を使う（モデルイベントが発火しない）
//Subject::insert([
//     ['subject' => '国語'],
//     ['subject' => '数学'],
//     ['subject' => '英語'],
// ]);

//②foreachで入れる（モデルイベントが発火する）
// $subjects = ['国語', '数学', '英語'];

// foreach ($subjects as $subject) {
//     Subject::create([
//         'subject' => $subject,
//     ]);
// }
