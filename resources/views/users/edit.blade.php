@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            {{ trans('account edit') }}
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">

                {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}
                <div class="row">
                    @include('users.fields')
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection
