<div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Table</h4>
                <div class="table-responsive">
                    <table class="table user-table">  
                        <tbody> 
                            <?php $i = 0; ?>
                            @foreach ($users as $user) 
                                <tr>
                                    <td> {{ ++$i }}</td>
                                    <td> {{ Form::label('name', trans('staff.name.name')) }}
                                        <p>{!! $user->name !!}</p>
                                    </td>
                                    <td>{{ Form::label('email', trans('staff.email')) }} <p>{!! $user->email !!}</p>
                                    </td>
                                    <td> {{ Form::label('code', trans('staff.code')) }} <p>{!! $user->code !!}</p>
                                    </td>
                                    <td>{{ Form::label('gender', trans('staff.genders.name')) }} <p>{!! $user->gender !!}</p>
                                    </td>
                                    <td>{{ Form::label('birthday', trans('staff.birthday')) }} <p>{!! $user->birthday !!}
                                        </p>
                                    </td>
                                    <td>{{ Form::label('phone', trans('staff.phone')) }} <p>{!! $user->phone !!}</p>
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['manager_staff.destroy', $user->id], 'method' => 'delete']) !!}
                                        <div class="btn-group">
                                            <a href="{!! route('manager_staff.edit', [$user->id]) !!}" class="btn btn-primary btn-sm">
                                                <i class="glyphicon glyphicon-edit"></i>{{ trans('auth.edit') }}
                                            </a>
                                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>'. trans('auth.delete'), [
                                                'type' => 'submit', 
                                                'class' => 'btn btn-danger btn-sm',
                                                'onclick' => "return confirm('Bạn có chắc chắn muốn xóa?')",
                                            ]) !!}
                                        </div>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

