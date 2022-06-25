<?php

use Illuminate\Database\Seeder;
use App\Models\Users\Subjects;
use Illuminate\Support\Facades\DB;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = ['国語', '数学', '英語'];
        foreach ($subjects as $subject) {
            DB::table('subjects')->insert([
                'subject' => $subject,
                'created_at' => '2022-06-20',
            ]);
        }
    }
}
