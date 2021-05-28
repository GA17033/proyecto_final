<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $id_categorias
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
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'id_categorias' => 'required',
		'nombre' => 'required',
		'descripcion' => 'required',
		'precio' => 'required',
		'cantidad' => 'required',
		'ranking' => 'required',
		'foto' => 'required',
    ];

    protected $perPage = 5;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_categorias','nombre','descripcion','precio','cantidad','ranking','foto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'id_categorias');
    }
    

}
