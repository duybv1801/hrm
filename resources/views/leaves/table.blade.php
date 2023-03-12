<div class="table-responsive">
    <table class="table" id="leaves-table">
        <thead>
        <tr>
            <th>User Id</th>
        <th>From Datetime</th>
        <th>To Datetime</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($leaves as $leave)
            <tr>
                <td>{{ $leave->user_id }}</td>
            <td>{{ $leave->from_datetime }}</td>
            <td>{{ $leave->to_datetime }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['leaves.destroy', $leave->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('leaves.show', [$leave->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('leaves.edit', [$leave->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
