<div class="form-group row">
    <label class="col-sm-3 control-label" for="check_in_time">{{ trans('setting.check_in_time') }}</label>
    <div class="col-sm-7">
        <div class="input-group">
            <div class="input-group date timepicker" id="timepicker_check_in_time" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#timepicker_check_in_time"
                    value="{{ $settings[0]->value }}" name="check_in_time" id="check_in_time"
                    data-toggle="datetimepicker">
            </div>
            <div id="check_in_time-error-msg" class="text-danger"></div>
        </div>
    </div>
</div>

<!-- check_out_time -->
<div class="form-group row">
    <label class="col-sm-3 control-label" for="check_out_time">{{ trans('setting.check_out_time') }}</label>
    <div class="col-sm-7">
        <div class="input-group">
            <div class="input-group date timepicker" id="timepicker_check_out_time" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#timepicker_check_out_time"
                    value="{{ $settings[1]->value }}" name="check_out_time" id="check_out_time"
                    data-toggle="datetimepicker">
            </div>
            <div id="check_out_time-error-msg" class="text-danger"></div>
        </div>
    </div>
</div>

<!-- flexible_time -->
<div class="form-group row">
    <label class="col-sm-3 control-label" for="flexible_time">{{ trans('setting.flexible_time') }}</label>
    <div class="col-sm-7">
        <div class="input-group">
            <input type="number" class="form-control" value="{{ $settings[2]->value }}" name="flexible_time"
                id="flexible_time">
        </div>
        <div id="check_out_time-error-msg" class="text-danger"></div>
    </div>
</div>

<!-- working_time -->
<div class="form-group row">
    <label class="col-sm-3 control-label" for="working_time">{{ trans('setting.working_time') }}</label>
    <div class="col-sm-7">
        <div class="input-group">
            <input type="number" class="form-control" value="{{ $settings[3]->value }}" name="working_time"
                id="working_time">
        </div>
        <div id="working_time-error-msg" class="text-danger"></div>
    </div>
</div>

<!-- lunch_time -->
<div class="form-group row">
    <label class="col-sm-3 control-label" for="lunch_time_start">{{ trans('setting.lunch_time_start') }}</label>
    <div class="col-sm-7">
        <div class="input-group">
            <div class="input-group date timepicker" id="timepicker_lunch_time_start" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input"
                    data-target="#timepicker_lunch_time_start" value="{{ $settings[4]->value }}" name="lunch_time_start"
                    id="lunch_time_start" data-toggle="datetimepicker">
            </div>
            <div id="lunch_time_start-error-msg" class="text-danger"></div>
        </div>
    </div>
</div>

<!-- flexible_lunch_time -->
<div class="form-group row">
    <label class="col-sm-3 control-label" for="lunch_time_end">{{ trans('setting.lunch_time_end') }}</label>
    <div class="col-sm-7">
        <div class="input-group">
            <div class="input-group date timepicker" id="timepicker_lunch_time_end" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#timepicker_lunch_time_end"
                    value="{{ $settings[5]->value }}" name="lunch_time_end" id="lunch_time_end"
                    data-toggle="datetimepicker">
            </div>
            <div id="lunch_time_end-error-msg" class="text-danger"></div>
        </div>
    </div>
</div>

<!-- female_leave -->
<div class="form-group row">
    <label class="col-sm-3 control-label" for="female_leave">{{ trans('setting.female_leave') }}</label>
    <div class="col-sm-7">
        <div class="input-group">
            <input type="number" class="form-control" value="{{ $settings[6]->value }}" name="female_leave"
                id="female_leave">
        </div>
        <div id="female_leave-error-msg" class="text-danger"></div>
    </div>
</div>

<!-- paid_leave -->
<div class="form-group row">
    <label class="col-sm-3 control-label" for="paid_leave">{{ trans('setting.paid_leave') }}</label>
    <div class="col-sm-7">
        <div class="input-group">
            <input type="number" class="form-control" value="{{ $settings[7]->value }}" name="paid_leave"
                id="paid_leave">
        </div>
        <div id="paid_leave-error-msg" class="text-danger"></div>
    </div>
</div>

<!-- remote -->
<div class="form-group row">
    <label class="col-sm-3 control-label" for="remote">{{ trans('setting.remote') }}</label>
    <div class="col-sm-7">
        <div class="input-group">
            <input type="number" class="form-control" value="{{ $settings[8]->value }}" name="remote"
                id="remote">
        </div>
        <div id="remote-error-msg" class="text-danger"></div>
    </div>
</div>

<!-- fresher_remote -->
<div class="form-group row">
    <label class="col-sm-3 control-label" for="fresher_remote">{{ trans('setting.fresher_remote') }}</label>
    <div class="col-sm-7">
        <div class="input-group">
            <input type="number" class="form-control" value="{{ $settings[9]->value }}" name="fresher_remote"
                id="fresher_remote">
        </div>
        <div id="fresher_remote-error-msg" class="text-danger"></div>
    </div>
</div>

<!-- ot_night_time_start -->
<div class="form-group row">
    <label class="col-sm-3 control-label"
        for="ot_night_time_start">{{ trans('setting.ot_night_time_start') }}</label>
    <div class="col-sm-7">
        <div class="input-group">
            <div class="input-group date timepicker" id="timepicker_ot_night_time_start" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input"
                    data-target="#timepicker_ot_night_time_start" value="{{ $settings[10]->value }}"
                    name="ot_night_time_start" id="ot_night_time_start" data-toggle="datetimepicker">
            </div>
            <div id="ot_night_time_start-error-msg" class="text-danger"></div>
        </div>
    </div>
</div>

<!-- ot_night_time_end -->
<div class="form-group row">
    <label class="col-sm-3 control-label" for="ot_night_time_end">{{ trans('setting.ot_night_time_end') }}</label>
    <div class="col-sm-7">
        <div class="input-group">
            <div class="input-group date timepicker" id="timepicker_ot_night_time_end" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input"
                    data-target="#timepicker_ot_night_time_end" value="{{ $settings[11]->value }}"
                    name="ot_night_time_end" id="ot_night_time_end" data-toggle="datetimepicker">
            </div>
            <div id="ot_night_time_end-error-msg" class="text-danger"></div>
        </div>
    </div>
</div>

<!-- day_time_ot -->
<div class="form-group row">
    <label class="col-sm-3 control-label" for="day_time_ot">{{ trans('setting.day_time_ot') }}</label>
    <div class="col-sm-7">
        <div class="input-group">
            <input type="number" class="form-control" value="{{ $settings[12]->value }}" name="day_time_ot"
                id="day_time_ot">
        </div>
        <div id="day_time_ot-error-msg" class="text-danger"></div>
    </div>
</div>

<!-- night_time_ot -->
<div class="form-group row">
    <label class="col-sm-3 control-label" for="night_time_ot">{{ trans('setting.night_time_ot') }}</label>
    <div class="col-sm-7">
        <div class="input-group">
            <input type="number" class="form-control" value="{{ $settings[13]->value }}" name="night_time_ot"
                id="night_time_ot">
        </div>
        <div id="night_time_ot-error-msg" class="text-danger"></div>
    </div>
</div>

<!-- ot_day_dayoff -->
<div class="form-group row">
    <label class="col-sm-3 control-label" for="ot_day_dayoff">{{ trans('setting.ot_day_dayoff') }}</label>
    <div class="col-sm-7">
        <div class="input-group">
            <input type="number" class="form-control" value="{{ $settings[14]->value }}" name="ot_day_dayoff"
                id="ot_day_dayoff">
        </div>
        <div id="ot_day_dayoff-error-msg" class="text-danger"></div>
    </div>
</div>

<!-- ot_night_dayoff -->
<div class="form-group row">
    <label class="col-sm-3 control-label" for="ot_night_dayoff">{{ trans('setting.ot_night_dayoff') }}</label>
    <div class="col-sm-7">
        <div class="input-group">
            <input type="number" class="form-control" value="{{ $settings[15]->value }}" name="ot_night_dayoff"
                id="ot_night_dayoff">
        </div>
        <div id="ot_night_dayoff-error-msg" class="text-danger"></div>
    </div>
</div>

<!-- ot_day_holiday -->
<div class="form-group row">
    <label class="col-sm-3 control-label" for="ot_day_holiday">{{ trans('setting.ot_day_holiday') }}</label>
    <div class="col-sm-7">
        <div class="input-group">
            <input type="number" class="form-control" value="{{ $settings[16]->value }}" name="ot_day_holiday"
                id="ot_day_holiday">
        </div>
        <div id="ot_day_holiday-error-msg" class="text-danger"></div>
    </div>
</div>

<!-- ot_night_holiday -->
<div class="form-group row">
    <label class="col-sm-3 control-label" for="ot_night_holiday">{{ trans('setting.ot_night_holiday') }}</label>
    <div class="col-sm-7">
        <div class="input-group">
            <input type="number" class="form-control" value="{{ $settings[17]->value }}" name="ot_night_holiday"
                id="ot_night_holiday">
        </div>
        <div id="ot_night_holiday-error-msg" class="text-danger"></div>
    </div>
</div>

<!-- max_working_minutes_everyday_day -->
<div class="form-group row">
    <label class="col-sm-3 control-label"
        for="max_working_minutes_everyday_day">{{ trans('setting.max_working_minutes_everyday_day') }}</label>
    <div class="col-sm-7">
        <div class="input-group">
            <input type="number" class="form-control" value="{{ $settings[18]->value }}"
                name="max_working_minutes_everyday_day" id="max_working_minutes_everyday_day">
        </div>
        <div id="max_working_minutes_everyday_day-error-msg" class="text-danger"></div>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-12">
        <input type="submit" class="btn btn-primary" value="{{ trans('auth.save') }}" id="submit-button">
    </div>
</div>
