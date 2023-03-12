<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::select('user_id', ], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- From Datetime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('from_datetime', 'From Datetime:') !!}
    {!! Form::text('from_datetime', null, ['class' => 'form-control']) !!}
</div>

<!-- To Datetime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('to_datetime', 'To Datetime:') !!}
    {!! Form::text('to_datetime', null, ['class' => 'form-control']) !!}
</div>