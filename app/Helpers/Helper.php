<?php
use App\Models\Setting;
use Carbon\Carbon;

if (! function_exists('calculator_working_minutes')) {
    /**
     * function calculator working hours
     */
    function calculator_working_minutes($check_in, $check_out)
    {
        $in = Carbon::parse($check_in);
        $out = Carbon::parse($check_out);
        if($in->gte($out)) {
            return 0;
        }

        $setting = Setting::all()->pluck('value', 'key')->toArray();
        $startWorkingDay = Carbon::parse($setting['start_working']);
        $endWorkingDay = Carbon::parse($setting['end_working']);
        $lunStart = Carbon::parse($setting['start_lunch']);
        $lunchEnd = Carbon::parse($setting['end_lunch']);
        //cal time morning
        $checkIn = max($in, $startWorkingDay);

        $endMorningWorking = max($checkIn,min($out, $lunStart));
        $minuteMorning = $checkIn->diffInMinutes($endMorningWorking);

        $startAfternoon = max($in, $lunchEnd);
        $endAfternoon = max($startAfternoon, min($out, $endWorkingDay));
        $minuteAfternoon = $startAfternoon->diffInMinutes($endAfternoon);

        
        $totalMinute =  $minuteMorning + $minuteAfternoon;
        $maxTimeWorkingDay = (int) $setting['max_working_minutes_everyday_day'];
        $recordTime = min($totalMinute, $maxTimeWorkingDay);
        $block =max(1, (int) $setting['minute_block']);

        return floor($recordTime/$block)*$block;
    }
}