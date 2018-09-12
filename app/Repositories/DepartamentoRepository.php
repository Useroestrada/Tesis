<?php

namespace App\Repositories;

use App\Models\Departamento;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DepartamentoRepository
 * @package App\Repositories
 * @version September 8, 2018, 3:48 pm UTC
 *
 * @method Departamento findWithoutFail($id, $columns = ['*'])
 * @method Departamento find($id, $columns = ['*'])
 * @method Departamento first($columns = ['*'])
*/
class DepartamentoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'empresa_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Departamento::class;
    }
}
