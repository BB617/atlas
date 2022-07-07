<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ReserveSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $startDateTime = Carbon::now()->startOfMonth();
        $endDateTime = Carbon::now()->endOfMonth();
        $dates = [];

        $diffDays = $startDateTime->diffInDays($endDateTime);
        for ($i = 0; $i <= $diffDays; $i++) {
            $dates[] = $startDateTime->format('Y-m-d');
            $startDateTime->addDays();
        }

        $parts = ['1', '2', '3'];

        foreach ($dates as $date) {
            DB::table('reserve_settings')->insert([
                'setting_reserve' => $date,
                'setting_part' => '2',
                'limit_users' => '20',
            ]);
        }
    }
}
