<?php

namespace App\Repositories;

use App\Models\Producto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProductoRepository
 * @package App\Repositories
 * @version September 8, 2018, 4:59 pm UTC
 *
 * @method Producto findWithoutFail($id, $columns = ['*'])
 * @method Producto find($id, $columns = ['*'])
 * @method Producto first($columns = ['*'])
*/
class ProductoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'codigo',
        'cantidad_ingreso',
        'cantidad_egreso',
        'stock',
        'tipoproducto_id',
        'marcaproducto_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Producto::class;
    }
}
