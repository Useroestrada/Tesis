<table class="table table-responsive" id="prestamos-table">
    <thead>
        <tr>
            <th>Fecha Prestamo</th>
        <th>Fecha Devolucion</th>
        <th>Estado</th>
        <th>Serie</th>
        <th>Descripcion</th>
        <th>Producto Id</th>
        <th>Empleado Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($prestamos as $prestamo)
        <tr>
            <td>{!! $prestamo->fecha_prestamo !!}</td>
            <td>{!! $prestamo->fecha_devolucion !!}</td>
            <td>{!! $prestamo->estado !!}</td>
            <td>{!! $prestamo->serie !!}</td>
            <td>{!! $prestamo->descripcion !!}</td>
            <td>{!! $prestamo->producto_id !!}</td>
            <td>{!! $prestamo->empleado_id !!}</td>
            <td>
                {!! Form::open(['route' => ['prestamos.destroy', $prestamo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('prestamos.show', [$prestamo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('prestamos.edit', [$prestamo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>