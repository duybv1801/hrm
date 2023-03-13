    
@extends('layouts.app')

@section('content')
<div class="content">
    <h1>Quên check in - check out</h1>
    <div class="clearfix"></div>
    <div class="card card-info">
        <div class="card-header" data-card-widget="collapse" title="Collapse">
            <h1 class="card-title">Thêm mới</h1>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
                {!! Form::model($inOutForget, ['route' => 'in_out_forgets.store']) !!}

                @include('in_out_forgets.fields')

                {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection