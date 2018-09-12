<?php

namespace App\Repositories;

use App\Models\MarcaProveedor;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MarcaProveedorRepository
 * @package App\Repositories
 * @version September 8, 2018, 4:05 pm UTC
 *
 * @method MarcaProveedor findWithoutFail($id, $columns = ['*'])
 * @method MarcaProveedor find($id, $columns = ['*'])
 * @method MarcaProveedor first($columns = ['*'])
*/
class MarcaProveedorRepository extends BaseRepository
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
        return MarcaProveedor::class;
    }
}
