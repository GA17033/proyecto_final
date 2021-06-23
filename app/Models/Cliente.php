<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $nombres
 * @property $apellidos
 * @property $clase
 * @property $direccion
 * @property $estado
 * @property $pais
 * @property $telefono
 * @property $email
 * @property $password
 * @property $tarjeta_credito
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'nombres' => 'required',
		'apellidos' => 'required',
		'clase' => 'required',
		'direccion' => 'required',
		'estado' => 'required',
		'pais' => 'required',
		'telefono' => 'required',
		'email' => 'required',
		'tarjeta_credito' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','apellidos','clase','direccion','estado','pais','telefono','email','tarjeta_credito'];



}
