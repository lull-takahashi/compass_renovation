<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;//createとかのイベントを止めてくれるスイッチ
use Illuminate\Database\Seeder;//seedの元。
use Illuminate\Support\Facades\Hash;//ハッシュ化を使うためのもの。
use App\Models\Users\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()//Eloquentで記述
    {
        User::create([
            'over_name' => '北海道',
            'under_name' => '札幌',
            'over_name_kana' => 'ホッカイドウ',
            'under_name_kana' => 'サッポロ',
            'mail_address' => 'hokkaido@mail.com',
            'sex' => '1', //tinyintなので数字(0~255の整数がいれられる)
            'birth_day' => '2000-7-17',
            'role' => '1',
            'password' => Hash::make('11111111'),//モデルイベントが走るので一応hash化はされるが明示的にしておく（意図を明確にするため）
        ]);

        User::create([
            'over_name' => '青森県',
            'under_name' => '青森',
            'over_name_kana' => 'アオモリケン',
            'under_name_kana' => 'アオモリ',
            'mail_address' => 'aomori@mail.com',
            'sex' => '2', //tinyintなので数字(0~255の整数がいれられる)
            'birth_day' => '2000-10-31',
            'role' => '2',
            'password' => Hash::make('11111111'),
        ]);

        User::create([
            'over_name' => '岩手県',
            'under_name' => '盛岡',
            'over_name_kana' => 'イワテケン',
            'under_name_kana' => 'モリオカ',
            'mail_address' => 'iwate@mail.com',
            'sex' => '1', //tinyintなので数字(0~255の整数がいれられる)
            'birth_day' => '2000-3-11',
            'role' => '3',
            'password' => Hash::make('11111111'),
        ]);

        User::create([
            'over_name' => '秋田県',
            'under_name' => '秋田',
            'over_name_kana' => 'アキタケン',
            'under_name_kana' => 'アキタ',
            'mail_address' => 'akita@mail.com',
            'sex' => '2', //tinyintなので数字(0~255の整数がいれらアキタ
            'birth_day' => '2010-8-29',
            'role' => '4',
            'password' => Hash::make('11111111'),
        ]);
    }
}

//Eloquentで行わない場合は↓
//use Illuminate\Support\Facades\DB;を追加
// DB::table('users')->create([
        //     'over_name' => '北海道',
        //     'under_name' => '札幌',
        //     'over_name_kana' => 'ホッカイドウ',
        //     'under_name_kana' => '札幌',
        //     'mail_address' => 'hokkaido@mail.com',
        //     'sex' => '1', //tinyintなので数字(0~255の整数がいれられる)
        //     'birth_day' => '2000-7-17',
        //     'role' => '1',
        //     'password' => Hash::make('11111111'),
        // ]);
//になる。
