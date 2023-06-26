<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegistersRecipe
 *
 * @property $id
 * @property $name_recipe
 * @property $recipe
 * @property $type_recipe
 * @property $description
 * @property $id2
 * @property $created_at
 * @property $updated_at
 *
 * @property Kitchen[] $kitchens
 * @property Restaurant $restaurant
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RegistersRecipe extends Model
{
    
    static $rules = [
		'name_recipe' => 'required',
		'recipe' => 'required',
		'type_recipe' => 'required',
		'description' => 'required',
		'id2' => 'required',
    ];

    protected $primaryKey = 'id';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name_recipe','recipe','type_recipe','description','id2'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kitchens()
    {
        return $this->hasMany('App\Models\Kitchen', 'id_recipes', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function restaurant()
    {
        return $this->hasOne('App\Models\Restaurant', 'id', 'id2');
    }
    

}
