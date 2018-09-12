<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $prestamo->id !!}</p>
</div>

<!-- Fecha Prestamo Field -->
<div class="form-group">
    {!! Form::label('fecha_prestamo', 'Fecha Prestamo:') !!}
    <p>{!! $prestamo->fecha_prestamo !!}</p>
</div>

<!-- Fecha Devolucion Field -->
<div class="form-group">
    {!! Form::label('fecha_devolucion', 'Fecha Devolucion:') !!}
    <p>{!! $prestamo->fecha_devolucion !!}</p>
</div>

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{!! $prestamo->estado !!}</p>
</div>

<!-- Serie Field -->
<div class="form-group">
    {!! Form::label('serie', 'Serie:') !!}
    <p>{!! $prestamo->serie !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{!! $prestamo->descripcion !!}</p>
</div>

<!-- Producto Id Field -->
<div class="form-group">
    {!! Form::label('producto_id', 'Producto Id:') !!}
    <p>{!! $prestamo->producto_id !!}</p>
</div>

<!-- Empleado Id Field -->
<div class="form-group">
    {!! Form::label('empleado_id', 'Empleado Id:') !!}
    <p>{!! $prestamo->empleado_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $prestamo->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $prestamo->updated_at !!}</p>
</div>

