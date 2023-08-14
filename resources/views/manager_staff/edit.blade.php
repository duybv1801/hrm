@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Manager Staff
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($user, ['route' => ['managerStaff.update', $user->id], 'method' => 'patch']) !!}

                        @include('manager_staff.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection