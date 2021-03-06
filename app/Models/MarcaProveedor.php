<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MarcaProveedor
 * @package App\Models
 * @version September 8, 2018, 4:05 pm UTC
 *
 * @property string nombre
 * @property string descripcion
 */
class MarcaProveedor extends Model
{
    use SoftDeletes;

    public $table = 'marca_proveedors';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required'
    ];

    
}
