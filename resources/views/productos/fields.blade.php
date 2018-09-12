<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! Form::text('codigo', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Ingreso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad_ingreso', 'Cantidad Ingreso:') !!}
    {!! Form::text('cantidad_ingreso', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Egreso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad_egreso', 'Cantidad Egreso:') !!}
    {!! Form::text('cantidad_egreso', null, ['class' => 'form-control']) !!}
</div>

<!-- Stock Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stock', 'Stock:') !!}
    {!! Form::text('stock', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoproducto Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoproducto_id', 'Tipoproducto Id:') !!}
    {!! Form::select('tipoproducto_id', $tipoProducto, null, ['class' => 'form-control']) !!}
</div>

<!-- Marcaproducto Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('marcaproducto_id', 'Marcaproducto Id:') !!}
    {!! Form::select('marcaproducto_id', $marcaProveedor, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('productos.index') !!}" class="btn btn-default">Cancel</a>
</div>
