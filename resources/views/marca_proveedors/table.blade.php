<table class="table table-responsive" id="marcaProveedors-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Descripcion</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($marcaProveedors as $marcaProveedor)
        <tr>
            <td>{!! $marcaProveedor->nombre !!}</td>
            <td>{!! $marcaProveedor->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['marcaProveedors.destroy', $marcaProveedor->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('marcaProveedors.show', [$marcaProveedor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('marcaProveedors.edit', [$marcaProveedor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>