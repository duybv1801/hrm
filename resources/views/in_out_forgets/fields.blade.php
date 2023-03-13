<div class="form-group row">
    {!! Form::label('code', 'Mã nhân viên', ['class' => 'col-sm-2']) !!}
    <label class="col-sm-4">{{ Auth::user()->code }}</label>
</div>
<div class="form-group row">
    {!! Form::label('name', 'Tên nhân viên', ['class' => 'col-sm-2']) !!}
    <label class="col-sm-4">{{ Auth::user()->name }}</label>
</div>
<div class="form-group row">
    {!! Form::label('date', 'Ngày', ['class' => 'col-sm-2']) !!}
    {!! Form::text('date',null, ['class' => 'form-control col-sm-10']) !!}
</div>
<div class="form-group row">
    {!! Form::label('in_time', 'Check in', ['class' => 'col-sm-2']) !!}
    {!! Form::text('in_time',null, ['class' => 'form-control col-sm-10']) !!}
</div>
<div class="form-group row">
    {!! Form::label('out_time', 'Check out', ['class' => 'col-sm-2']) !!}
    {!! Form::text('out_time',null, ['class' => 'form-control col-sm-10']) !!}
</div>
<div class="form-group row">
    {!! Form::label('timesheet', 'Giờ hệ thống ghi nhận', ['class' => 'col-sm-2']) !!}
    <div class="col-sm-10 text-bold text-danger"><span style="margin-right: 30px">Check In:{{$timesheet->in_time?: '00:00:00'}}</span> Check Out: {{$timesheet->out_time ?: '00:00:00'}}</div>
</div>
<div class="form-group row">
    {!! Form::label('reason', 'Lý do', ['class' => 'col-sm-2']) !!}
    {!! Form::text('reason',null, ['class' => 'form-control col-sm-10']) !!}
</div>
<div class="form-group row">
    {!! Form::label('evedent', 'Bằng chứng', ['class' => 'col-sm-2']) !!}
    {!! Form::text('evedent',null, ['class' => 'form-control col-sm-10']) !!}
</div>
<div class="form-group row">
    {!! Form::label('approver_id', 'Người xác nhận', ['class' => 'col-sm-2']) !!}
    {!! Form::select('approver_id',[], ['class' => 'form-control col-sm-10']) !!}
</div>
<!-- Submit Field -->
<div class="form-group row">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
</div>