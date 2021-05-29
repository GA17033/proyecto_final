<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $id_categorias
 * @property $id_proveedores
 * @property $nombre
 * @property $descripcion
 * @property $precio
 * @property $cantidad
 * @property $ranking
 * @property $foto
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property Proveedore $proveedore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'id_categorias' => 'required',
		'id_proveedores' => 'required',
		'nombre' => 'required',
		'descripcion' => 'required',
		'precio' => 'required',
		'cantidad' => 'required',
		'ranking' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_categorias','id_proveedores','nombre','descripcion','precio','cantidad','ranking','foto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'id_categorias');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedore()
    {
        return $this->hasOne('App\Models\Proveedore', 'id', 'id_proveedores');
    }
    

}
