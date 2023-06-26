<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Orderne
 *
 * @property $id
 * @property $id_saurcers
 * @property $id_drinks
 * @property $id_customers
 * @property $created_at
 * @property $updated_at
 *
 * @property Bill[] $bills
 * @property Customer $customer
 * @property Drink $drink
 * @property Saurcer $saurcer
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Orderne extends Model
{
    
    static $rules = [
		'id_saurcers' => 'required',
		'id_drinks' => 'required',
		'id_customers' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_saurcers','id_drinks','id_customers'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bills()
    {
        return $this->hasMany('App\Models\Bill', 'id_ordenes', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function customer()
    {
        return $this->hasOne('App\Models\Customer', 'id', 'id_customers');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function drink()
    {
        return $this->hasOne('App\Models\Drink', 'id', 'id_drinks');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saurcer()
    {
        return $this->hasOne('App\Models\Saurcer', 'id', 'id_saurcers');
    }
    

}
