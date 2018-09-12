<table class="table table-responsive" id="empleados-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Apellido</th>
        <th>Correlativo</th>
        <th>Correo</th>
        <th>Extension</th>
        <th>Direccion</th>
        <th>Nit</th>
        <th>Dpi</th>
        <th>Departamento Id</th>
        <th>Cargo Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($empleados as $empleado)
        <tr>
            <td>{!! $empleado->nombre !!}</td>
            <td>{!! $empleado->apellido !!}</td>
            <td>{!! $empleado->correlativo !!}</td>
            <td>{!! $empleado->correo !!}</td>
            <td>{!! $empleado->extension !!}</td>
            <td>{!! $empleado->direccion !!}</td>
            <td>{!! $empleado->nit !!}</td>
            <td>{!! $empleado->dpi !!}</td>
            <td>{!! $empleado->departamento_id !!}</td>
            <td>{!! $empleado->cargo_id !!}</td>
            <td>
                {!! Form::open(['route' => ['empleados.destroy', $empleado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('empleados.show', [$empleado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('empleados.edit', [$empleado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>