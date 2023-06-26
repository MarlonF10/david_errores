<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Kitchen
 *
 * @property $id
 * @property $n_cooks
 * @property $n_waiters
 * @property $id_recipes
 * @property $id_menus
 * @property $id_utencils
 * @property $created_at
 * @property $updated_at
 *
 * @property Menu $menu
 * @property RegistersRecipe $registersRecipe
 * @property Utencil $utencil
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Kitchen extends Model
{
    
    static $rules = [
		'n_cooks' => 'required',
		'n_waiters' => 'required',
		'id_recipes' => 'required',
		'id_menus' => 'required',
		'id_utencils' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['n_cooks','n_waiters','id_recipes','id_menus','id_utencils'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function menu()
    {
        return $this->hasOne('App\Models\Menu', 'id', 'id_menus');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function registersRecipe()
    {
        return $this->hasOne('App\Models\RegistersRecipe', 'id', 'id_recipes');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function utencil()
    {
        return $this->hasOne('App\Models\Utencil', 'id', 'id_utencils');
    }
    

}
