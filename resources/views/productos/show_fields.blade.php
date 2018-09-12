<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $producto->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $producto->nombre !!}</p>
</div>

<!-- Codigo Field -->
<div class="form-group">
    {!! Form::label('codigo', 'Codigo:') !!}
    <p>{!! $producto->codigo !!}</p>
</div>

<!-- Cantidad Ingreso Field -->
<div class="form-group">
    {!! Form::label('cantidad_ingreso', 'Cantidad Ingreso:') !!}
    <p>{!! $producto->cantidad_ingreso !!}</p>
</div>

<!-- Cantidad Egreso Field -->
<div class="form-group">
    {!! Form::label('cantidad_egreso', 'Cantidad Egreso:') !!}
    <p>{!! $producto->cantidad_egreso !!}</p>
</div>

<!-- Stock Field -->
<div class="form-group">
    {!! Form::label('stock', 'Stock:') !!}
    <p>{!! $producto->stock !!}</p>
</div>

<!-- Tipoproducto Id Field -->
<div class="form-group">
    {!! Form::label('tipoproducto_id', 'Tipoproducto Id:') !!}
    <p>{!! $producto->tipoproducto_id !!}</p>
</div>

<!-- Marcaproducto Id Field -->
<div class="form-group">
    {!! Form::label('marcaproducto_id', 'Marcaproducto Id:') !!}
    <p>{!! $producto->marcaproducto_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $producto->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $producto->updated_at !!}</p>
</div>

