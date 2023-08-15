<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'check_in_time' => 'required|date_format:H:i',
            'check_out_time' => 'required|date_format:H:i',
            'flexible_time' => 'required|numeric|lt:working_time',
            'working_time' => 'required|numeric',
            'lunch_time' => 'required|date_format:H:i',
            'flexible_lunch_time' => 'required|numeric',
            'female_leave' => 'required|numeric',
            'paid_leave' => 'required|numeric',
            'remote' => 'required|numeric',
            'fresher_remote' => 'required|numeric',
            'ot_night_time_start' => 'required|date_format:H:i',
            'ot_night_time_end' => 'required|date_format:H:i',
            'day_time_ot' => 'required|numeric',
            'night_time_ot' => 'required|numeric',
            'ot_day_dayoff' => 'required|numeric',
            'ot_night_dayoff' => 'required|numeric',
            'ot_day_holiday' => 'required|numeric',
            'ot_night_holiday' => 'required|numeric',
            'max_working_minutes_everyday_day' => 'required|numeric|gt:working_time',
        ];
    }

    public function attributes()
    {
        return [
            'check_in_time' => trans('setting.check_in_time'),
            'check_out_time' => trans('setting.check_out_time'),
            'flexible_time' => trans('setting.flexible_time'),
            'working_time' => trans('setting.working_time'),
            'lunch_time' => trans('setting.lunch_time'),
            'flexible_lunch_time' => trans('setting.flexible_lunch_time'),
            'female_leave' => trans('setting.female_leave'),
            'paid_leave' => trans('setting.paid_leave'),
            'remote' => trans('setting.remote'),
            'fresher_remote' => trans('setting.fresher_remote'),
            'ot_night_time_start' => trans('setting.ot_night_time_start'),
            'ot_night_time_end' => trans('setting.ot_night_time_end'),
            'day_time_ot' => trans('setting.day_time_ot'),
            'night_time_ot' => trans('setting.night_time_ot'),
            'ot_day_dayoff' => trans('setting.ot_day_dayoff'),
            'ot_night_dayoff' => trans('setting.ot_night_dayoff'),
            'ot_day_holiday' => trans('setting.ot_day_holiday'),
            'ot_night_holiday' => trans('setting.ot_night_holiday'),
            'max_working_minutes_everyday_day' => trans('setting.max_working_minutes_everyday_day'),
        ];
    }
}
