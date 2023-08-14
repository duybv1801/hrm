@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
           Quản lí nhân viên
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'manager_staff.store']) !!}

                        @include('manager_staff.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
