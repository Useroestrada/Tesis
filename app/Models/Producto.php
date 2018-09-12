<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Producto
 * @package App\Models
 * @version September 8, 2018, 4:59 pm UTC
 *
 * @property string nombre
 * @property string codigo
 * @property integer cantidad_ingreso
 * @property integer cantidad_egreso
 * @property integer stock
 * @property integer tipoproducto_id
 * @property integer marcaproducto_id
 */
class Producto extends Model
{
    use SoftDeletes;

    public $table = 'productos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'codigo',
        'cantidad_ingreso',
        'cantidad_egreso',
        'stock',
        'tipoproducto_id',
        'marcaproducto_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'codigo' => 'string',
        'cantidad_ingreso' => 'integer',
        'cantidad_egreso' => 'integer',
        'stock' => 'integer',
        'tipoproducto_id' => 'integer',
        'marcaproducto_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'codigo' => 'required',
        'cantidad_ingreso' => 'required'
    ];

    
}
