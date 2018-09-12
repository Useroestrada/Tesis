<?php

namespace App\Repositories;

use App\Models\TipoProducto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoProductoRepository
 * @package App\Repositories
 * @version September 8, 2018, 4:06 pm UTC
 *
 * @method TipoProducto findWithoutFail($id, $columns = ['*'])
 * @method TipoProducto find($id, $columns = ['*'])
 * @method TipoProducto first($columns = ['*'])
*/
class TipoProductoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoProducto::class;
    }
}
