<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Prestamo
 * @package App\Models
 * @version September 8, 2018, 5:29 pm UTC
 *
 * @property date fecha_prestamo
 * @property date fecha_devolucion
 * @property string estado
 * @property string serie
 * @property string descripcion
 * @property integer producto_id
 * @property integer empleado_id
 */
class Prestamo extends Model
{
    use SoftDeletes;

    public $table = 'prestamos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'fecha_prestamo',
        'fecha_devolucion',
        'estado',
        'serie',
        'descripcion',
        'producto_id',
        'empleado_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fecha_prestamo' => 'date',
        'fecha_devolucion' => 'date',
        'estado' => 'string',
        'serie' => 'string',
        'descripcion' => 'string',
        'producto_id' => 'integer',
        'empleado_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fecha_prestamo' => 'required',
        'estado' => 'required'
    ];

    
}
