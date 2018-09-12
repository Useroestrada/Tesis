<li class="{{ Request::is('empresas*') ? 'active' : '' }}">
    <a href="{!! route('empresas.index') !!}"><i class="fa fa-edit"></i><span>Empresas</span></a>
</li>


<li class="{{ Request::is('departamentos*') ? 'active' : '' }}">
    <a href="{!! route('departamentos.index') !!}"><i class="fa fa-edit"></i><span>Departamentos</span></a>
</li>


<li class="{{ Request::is('cargos*') ? 'active' : '' }}">
    <a href="{!! route('cargos.index') !!}"><i class="fa fa-edit"></i><span>Cargos</span></a>
</li>

<li class="{{ Request::is('empleados*') ? 'active' : '' }}">
    <a href="{!! route('empleados.index') !!}"><i class="fa fa-edit"></i><span>Empleados</span></a>
</li>

<li class="{{ Request::is('marcaProveedors*') ? 'active' : '' }}">
    <a href="{!! route('marcaProveedors.index') !!}"><i class="fa fa-edit"></i><span>Marca Proveedors</span></a>
</li>

<li class="{{ Request::is('tipoProductos*') ? 'active' : '' }}">
    <a href="{!! route('tipoProductos.index') !!}"><i class="fa fa-edit"></i><span>Tipo Productos</span></a>
</li>


<li class="{{ Request::is('productos*') ? 'active' : '' }}">
    <a href="{!! route('productos.index') !!}"><i class="fa fa-edit"></i><span>Productos</span></a>
</li>



<li class="{{ Request::is('prestamos*') ? 'active' : '' }}">
    <a href="{!! route('prestamos.index') !!}"><i class="fa fa-edit"></i><span>Prestamos</span></a>
</li>

