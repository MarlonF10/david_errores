<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Restaurant
 *
 * @property $id
 * @property $name
 * @property $direction
 * @property $cellphone
 * @property $star_time
 * @property $finish_time
 * @property $id1
 * @property $created_at
 * @property $updated_at
 *
 * @property Employee $employee
 * @property RegistersRecipe[] $registersRecipes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Restaurant extends Model
{
    
    static $rules = [
		'name' => 'required',
		'direction' => 'required',
		'cellphone' => 'required',
		'star_time' => 'required',
		'finish_time' => 'required',
		'id1' => 'required',
    ];

    protected $primaryKey = 'id';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name','direction','cellphone','star_time','finish_time','id1'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function employee()
    {
        return $this->hasOne('App\Models\Employee', 'id', 'id1');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registersRecipes()
    {
        return $this->hasMany('App\Models\RegistersRecipe', 'id2', 'id');
    }
    

}
