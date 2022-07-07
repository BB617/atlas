<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 32; $i++) {
            DB::table('reserve_setting_users')->insert([
                'user_id' => '1',
                'reserve_setting_id' => $i,
            ]);
        }
    }
}
