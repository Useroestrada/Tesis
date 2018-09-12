<?php

namespace App\Repositories;

use App\Models\Prestamo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PrestamoRepository
 * @package App\Repositories
 * @version September 8, 2018, 5:29 pm UTC
 *
 * @method Prestamo findWithoutFail($id, $columns = ['*'])
 * @method Prestamo find($id, $columns = ['*'])
 * @method Prestamo first($columns = ['*'])
*/
class PrestamoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha_prestamo',
        'fecha_devolucion',
        'estado',
        'serie',
        'descripcion',
        'producto_id',
        'empleado_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Prestamo::class;
    }
}
