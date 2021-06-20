<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 *
 * @property $id
 * @property $tipo_de_pago
 * @property $permitido
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pago extends Model
{
    
    static $rules = [
		'tipo_de_pago' => 'required',
		'permitido' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo_de_pago','permitido'];


    
    /*
    public function pagos()
    {
        return $this->hasMany('App\Models\Proveedore');
    }

    
    public function proveedores()
    {
        return $this->belongsTo('App\Models\Pago');
    }
    */

}
