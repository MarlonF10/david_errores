<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Drink
 *
 * @property $id
 * @property $name
 * @property $type
 * @property $main_ingredients
 * @property $price
 * @property $comments
 * @property $characteristics
 * @property $id_customers
 * @property $created_at
 * @property $updated_at
 *
 * @property Ingredient $ingredient
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Drink extends Model
{
    
    static $rules = [
		'name' => 'required',
		'type' => 'required',
		'main_ingredients' => 'required',
		'price' => 'required',
		'comments' => 'required',
		'characteristics' => 'required',
		'id_customers' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','type','main_ingredients','price','comments','characteristics','id_customers'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ingredient()
    {
        return $this->hasOne('App\Models\Ingredient', 'id', 'id_customers');
    }
    

}
