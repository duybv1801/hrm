<!-- Name Field -->
<div class="form-group">
    {{ Form::label('name', trans('staff.name')) }}
    <p>{!! $user->name !!}</p>
</div>

<!-- Email Field -->
<div class="form-group"> {{ Form::label('email', trans('staff.email')) }} <p>{!! $user->email !!}</p>
</div>

<!-- Code Field -->
<div class="form-group"> {{ Form::label('code', trans('staff.code')) }} <p>{!! $user->code !!}</p>
</div>

<!-- Start Date Field -->
<div class="form-group"> {{ Form::label('start_date', trans('staff.start_date')) }} <p>{!! $user->start_date !!}</p>
</div>

<!-- Official Start Date Field -->
<div class="form-group"> {{ Form::label('official_start_date', trans('staff.official_start_date')) }} <p>
        {!! $user->official_start_date !!}</p>
</div>

<!-- Gender Field -->
<div class="form-group"> {{ Form::label('gender', trans('staff.gender')) }} <p>{!! $user->gender !!}</p>
</div>

<!-- Dependent Person Field -->
<div class="form-group"> {{ Form::label('dependent_person', trans('staff.dependent_person')) }} <p>
        {!! $user->dependent_person !!}</p>
</div>

<!-- Contract Field -->
<div class="form-group"> {{ Form::label('contract', trans('staff.contract')) }} <p>{!! $user->contract !!}</p>
</div>

<!-- Birthday Field -->
<div class="form-group"> {{ Form::label('birthday', trans('staff.birthday')) }} <p>{!! $user->birthday !!}</p>
</div>

<!-- Phone Field -->
<div class="form-group"> {{ Form::label('phone', trans('staff.phone')) }} <p>{!! $user->phone !!}</p>
</div>

<!-- Status Field -->
<div class="form-group"> {{ Form::label('status', trans('staff.status')) }} <p>{!! $user->status !!}</p>
</div>

<!-- Position Field -->
<div class="form-group"> {{ Form::label('position', trans('staff.position')) }} <p>{!! $user->position !!}</p>
</div>

<!-- User ID Field -->
<div class="form-group"> {{ Form::label('user_id', trans('staff.user_id')) }} <p>{!! $user->user_id !!}</p>
</div>

<!-- Avatar Field -->
<div class="form-group"> {{ Form::label('avatar', trans('staff.avatar')) }} <p>{!! $user->avatar !!}</p>
</div>
<!-- Role Field -->
<div class="form-group"> {{ Form::label('role', trans('staff.role')) }} <p>{!! $user->role !!}</p>
</div>

<!-- Leave Hours Left Field -->
<div class="form-group"> {{ Form::label('leave_hours_left', trans('staff.leave_hours_left')) }} <p>
        {!! $user->leave_hours_left !!}</p>
</div>

<!-- Leave Hours Left in Month Field -->
<div class="form-group"> {{ Form::label('leave_hours_left_in_month', trans('staff.leave_hours_left_in_month')) }} <p>
        {!! $user->leave_hours_left_in_month !!}</p>
</div>
