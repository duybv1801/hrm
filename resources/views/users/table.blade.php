<div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table user-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ Form::label('name', trans('staff.name.name')) }}</th>
                                <th>{{ Form::label('email', trans('staff.email')) }}</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i = 0; ?>
                            @foreach ($users as $user)
                                <tr>
                                    <td> {{ ++$i }}</td>
                                    <td>
                                        <p>{!! $user->name !!}</p>
                                    </td>
                                    <td>
                                        <p>{!! $user->email !!}</p>
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                                        <div class="btn-group">
                                            <a href="{!! route('users.edit', [$user->id]) !!}" class="btn btn-primary btn-sm">
                                                <i class="glyphicon glyphicon-edit"></i>{{ trans('edit') }}
                                            </a>
                                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>' . trans('delete'), [
                                                'type' => 'submit',
                                                'class' => 'btn btn-danger btn-sm',
                                                'onclick' => "if(!confirm('".trans('alert delete')."')){return false;}",
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
