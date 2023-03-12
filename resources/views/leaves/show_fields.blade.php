<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $leave->user_id }}</p>
</div>

<!-- From Datetime Field -->
<div class="col-sm-12">
    {!! Form::label('from_datetime', 'From Datetime:') !!}
    <p>{{ $leave->from_datetime }}</p>
</div>

<!-- To Datetime Field -->
<div class="col-sm-12">
    {!! Form::label('to_datetime', 'To Datetime:') !!}
    <p>{{ $leave->to_datetime }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $leave->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $leave->updated_at }}</p>
</div>

