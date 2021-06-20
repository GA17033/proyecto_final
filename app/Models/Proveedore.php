<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 *
 * @property $id
 * @property $nombre
 * @property $direccion
 * @property $ciudad
 * @property $codigo_postal
 * @property $telefono
 * @property $email
 * @property $metodos_de_pagos
 * @property $tipo_descuento
 * @property $notas
 * @property $descuento_disponible
 * @property $pais
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedore extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'direccion' => 'required',
		'ciudad' => 'required',
		'codigo_postal' => 'required',
		'telefono' => 'required',
		'email' => 'required',
		'metodos_de_pagos' => 'required',
		'tipo_descuento' => 'required',
		'notas' => 'required',
		'descuento_disponible' => 'required',
		'pais' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','direccion','ciudad','codigo_postal','telefono','email','metodos_de_pagos','tipo_descuento','notas','descuento_disponible','pais'];


	
    /*
    public function productos()
    {
        return $this->hasMany('App\Models\Producto');
    }
    */


}
