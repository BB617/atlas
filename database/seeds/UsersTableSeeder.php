<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'over_name' => '山田',
                'under_name' => '太郎',
                'over_name_kana' => 'ヤマダ',
                'under_name_kana' => 'タロウ',
                'mail_address' => 't-yamada@example.com',
                'sex' => 1,
                'birth_day' => '2000-01-01',
                'role' => 1,
                'password' => Hash::make('tyamada0101'),
                'created_at' => '2022-06-20 10:00:00',
            ],
            [
                'over_name' => '山田',
                'under_name' => '花子',
                'over_name_kana' => 'ヤマダ',
                'under_name_kana' => 'ハナコ',
                'mail_address' => 'h-yamada@example.com',
                'sex' => 2,
                'birth_day' => '2000-01-02',
                'role' => 2,
                'password' => Hash::make('hyamada0102'),
                'created_at' => '2022-06-20 10:00:00',
            ],
            [
                'over_name' => '田中',
                'under_name' => '三郎',
                'over_name_kana' => 'タナカ',
                'under_name_kana' => 'サブロウ',
                'mail_address' => 's-tanaka@example.com',
                'sex' => 1,
                'birth_day' => '2000-01-03',
                'role' => 3,
                'password' => Hash::make('stanaka0103'),
                'created_at' => '2022-06-20 10:00:00',
            ],
            [
                'over_name' => '田中',
                'under_name' => '四織',
                'over_name_kana' => 'タナカ',
                'under_name_kana' => 'シオリ',
                'mail_address' => 'sh-tanaka@example.com',
                'sex' => 2,
                'birth_day' => '2000-01-04',
                'role' => 4,
                'password' => Hash::make('shtanaka0104'),
                'created_at' => '2022-06-20 10:00:00',
            ],
        ]);
    }
}
