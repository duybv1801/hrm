<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{!! $user->name !!}</td>
                    <td>{!! $user->email !!}</td>
                    <td>
                        {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                        <div class="btn-group">
                            <a href="{!! route('users.show', [$user->id]) !!}" class="btn btn-primary btn-sm">
                                <i class="glyphicon glyphicon-eye-open"></i> Xem
                            </a>
                            <a href="{!! route('users.edit', [$user->id]) !!}" class="btn btn-warning btn-sm">
                                <i class="glyphicon glyphicon-edit"></i>Sửa
                            </a>
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Xóa', [
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
