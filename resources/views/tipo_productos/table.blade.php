<table class="table table-responsive" id="tipoProductos-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Descripcion</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoProductos as $tipoProducto)
        <tr>
            <td>{!! $tipoProducto->nombre !!}</td>
            <td>{!! $tipoProducto->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoProductos.destroy', $tipoProducto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoProductos.show', [$tipoProducto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoProductos.edit', [$tipoProducto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>