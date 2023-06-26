<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Saurcer
 *
 * @property $id
 * @property $name
 * @property $type
 * @property $main_ingredients
 * @property $price
 * @property $comments
 * @property $characteristics
 * @property $id3
 * @property $created_at
 * @property $updated_at
 *
 * @property Ingredient $ingredient
 * @property Menu[] $menuses
 * @property Menu[] $menuses
 * @property Request[] $requests
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Saurcer extends Model
{

    static $rules = [
		'name' => 'required',
		'type' => 'required',
		'main_ingredients' => 'required',
		'price' => 'required',
		'characteristics' => 'required',
		'id3' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','type','main_ingredients','price','comments','characteristics','id3'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ingredient()
    {
        return $this->hasOne('App\Models\Ingredient', 'id', 'id3');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function menus()
    {
        return $this->hasMany('App\Models\Menu', 'id_saurcers', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function menuses()
    {
        return $this->hasMany('App\Models\Menu', 'id_drinks', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requests()
    {
        return $this->hasMany('App\Models\Request', 'id_saurcers', 'id');
    }


}
