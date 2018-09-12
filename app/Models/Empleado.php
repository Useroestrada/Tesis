<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Empleado
 * @package App\Models
 * @version September 8, 2018, 4:02 pm UTC
 *
 * @property string nombre
 * @property string apellido
 * @property string correlativo
 * @property string correo
 * @property string extension
 * @property string direccion
 * @property string nit
 * @property string dpi
 * @property integer departamento_id
 * @property integer cargo_id
 */
class Empleado extends Model
{
    use SoftDeletes;

    public $table = 'empleados';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'apellido',
        'correlativo',
        'correo',
        'extension',
        'direccion',
        'nit',
        'dpi',
        'departamento_id',
        'cargo_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'apellido' => 'string',
        'correlativo' => 'string',
        'correo' => 'string',
        'extension' => 'string',
        'direccion' => 'string',
        'nit' => 'string',
        'dpi' => 'string',
        'departamento_id' => 'integer',
        'cargo_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'correo' => 'email'
    ];

    
}
