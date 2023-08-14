<!-- Name Field -->
<div class="form-group col-sm-6">
    <label for="name">{{ trans('staff.name') }}</label>
    <input type="name" name="name" id="name" class="form-control" value="{{ $user->name }}" />
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <label for="email">{{ trans('staff.email') }}</label>
    <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" />
</div>

<!-- Code Field -->
<div class="form-group col-sm-6">
    <label for="code">{{ trans('staff.code') }}</label>
    <input type="text" name="code" id="code" class="form-control" value="{{ $user->code }}" />
</div>

<!-- Start Date Field -->
<div class="form-group col-sm-6">
    <label for="start_date">{{ trans('staff.start_date') }}</label>
    <input type="text" name="start_date" id="start_date" class="form-control" value="{{ $user->start_date }}" />
</div>

<!-- Official Start Date Field -->
<div class="form-group col-sm-6">
    <label for="official_start_date">{{ trans('staff.official_start_date') }}</label>
    <input type="text" name="official_start_date" id="official_start_date" class="form-control"
        value="{{ $user->official_start_date }}" />
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    <label for="gender">{{ trans('staff.gender') }}</label>
    <input type="text" name="gender" id="gender" class="form-control" value="{{ $user->gender }}" />
</div>

<!-- Dependent Person Field -->
<div class="form-group col-sm-6">
    <label for="dependent_person">{{ trans('staff.dependent_person') }}</label>
    <input type="text" name="dependent_person" id="dependent_person" class="form-control"
        value="{{ $user->dependent_person }}" />
</div>

<!-- Contract Field -->
<div class="form-group col-sm-6">
    <label for="contract">{{ trans('staff.contract') }}</label>
    <input type="text" name="contract" id="contract" class="form-control" value="{{ $user->contract }}" />
</div>

<!-- Birthday Field -->
<div class="form-group col-sm-6">
    <label for="birthday">{{ trans('staff.birthday') }}</label>
    <input type="text" name="birthday" id="birthday" class="form-control" value="{{ $user->birthday }}" />
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    <label for="phone">{{ trans('staff.phone') }}</label>
    <input type="text" name="phone" id="phone" class="form-control" value="{{ $user->phone }}" />
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    <label for="status">{{ trans('staff.status') }}</label>
    <input type="text" name="status" id="status" class="form-control" value="{{ $user->status }}" />
</div>

<!-- Position Field -->
<div class="form-group col-sm-6">
    <label for="position">{{ trans('staff.position') }}</label>
    <input type="text" name="position" id="position" class="form-control" value="{{ $user->position }}" />
</div>

<!-- User ID Field -->
<div class="form-group col-sm-6">
    <label for="user_id">{{ trans('staff.user_id') }}</label>
    <input type="text" name="user_id" id="user_id" class="form-control" value="{{ $user->user_id }}" />
</div>

<!-- Avatar Field -->
<div class="form-group col-sm-6">
    <label for="avatar">{{ trans('staff.avatar') }}</label>
    <input type="text" name="avatar" id="avatar" class="form-control" value="{{ $user->avatar }}" />
</div>

<!-- Role Field -->
<div class="form-group col-sm-6">
    <label for="role">{{ trans('staff.role') }}</label>
    <input type="text" name="role" id="role" class="form-control" value="{{ $user->role }}" />
</div>


<!-- Leave Hours Left Field -->
<div class="form-group col-sm-6">
    <label for="role">{{ trans('staff.leave_hours_left') }}</label>
    <input type="text" name="leave_hours_left" id="leave_hours_left" class="form-control"
        value="{{ $user->leave_hours_left }}" />
</div>

<!-- Leave Hours Left in Month Field -->
<div class="form-group col-sm-6">
    <label for="role">{{ trans('staff.leave_hours_left_in_month') }}</label>
    <input type="text" name="leave_hours_left" id="leave_hours_left" class="form-control"
        value="{{ $user->leave_hours_left_in_month }}" />
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(trans('auth.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('manager_staff.index') !!}" class="btn btn-default">{{ trans('auth.cancel') }}</a>
</div>
