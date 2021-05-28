<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 *
 * @property $id
 * @property $nombre
 * @property $Direccion
 * @property $Ciudad
 * @property $Codigo_postal
 * @property $Telefono
 * @property $Email
 * @property $Metodos_de_pagos
 * @property $Tipo_descuento
 * @property $Notas
 * @property $Descuento_disponible
 * @property $Pais
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
		'Direccion' => 'required',
		'Ciudad' => 'required',
		'Codigo_postal' => 'required',
		'Telefono' => 'required',
		'Email' => 'required',
		'Metodos_de_pagos' => 'required',
		'Tipo_descuento' => 'required',
		'Notas' => 'required',
		'Descuento_disponible' => 'required',
		'Pais' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','Direccion','Ciudad','Codigo_postal','Telefono','Email','Metodos_de_pagos','Tipo_descuento','Notas','Descuento_disponible','Pais'];



}
