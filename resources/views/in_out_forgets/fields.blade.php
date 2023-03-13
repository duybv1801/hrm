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
    {!!  !!}
</div>
<div class="form-group row">
    {!! Form::label('in_time', 'Check in', ['class' => 'col-sm-2']) !!}
    
</div>