<?php

namespace App\Http\Controllers\Authenticated\Calendar\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Calendars\General\CalendarView;
use App\Models\Calendars\ReserveSettings;
use App\Models\Calendars\Calendar;
use App\Models\USers\User;
use Auth;
use DB;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CalendarsController extends Controller
{
    public function show()
    {
        $calendar = new CalendarView(time());
        return view('authenticated.calendar.general.calendar', compact('calendar'));
    }

    public function reserve(Request $request)
    {
        DB::beginTransaction();
        try {
            $getPart = $request->getPart;
            $getDate = $request->getData;
            $reserveDays = array_filter(array_combine($getDate, $getPart));
            foreach ($reserveDays as $key => $value) {
                $reserve_settings = ReserveSettings::where('setting_reserve', $key)->where('setting_part', $value)->first();
                $reserve_settings->decrement('limit_users');
                $reserve_settings->users()->attach(Auth::id());
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
        return redirect()->route('calendar.general.show', ['user_id' => Auth::id()]);
    }

    public function delete(Request $request)
    {
        DB::beginTransaction();
        try {
            $date = $request->date;
            $part = $request->part;

            $reserve_setting = ReserveSettings::where('setting_reserve', $date)
                ->where('setting_part', $part)
                ->first();

            $reserve_setting->users()->detach(Auth::id());
            $reserve_setting->increment('limit_users');

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }

        return redirect()->route('calendar.general.show', ['user_id' => Auth::id()]);
    }
}
