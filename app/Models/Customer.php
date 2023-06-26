<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 *
 * @property $id
 * @property $name
 * @property $last_name
 * @property $direction
 * @property $cellphone
 * @property $dni
 * @property $created_at
 * @property $updated_at
 *
 * @property Request[] $requests
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Customer extends Model
{
    
    static $rules = [
		'name' => 'required',
		'last_name' => 'required',
		'direction' => 'required',
		'cellphone' => 'required',
		'dni' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','last_name','direction','cellphone','dni'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requests()
    {
        return $this->hasMany('App\Models\Request', 'id_customers', 'id');
    }
    

}
