<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property $id
 * @property $name
 * @property $last_name
 * @property $dni
 * @property $gender
 * @property $birthday
 * @property $created_at
 * @property $updated_at
 *
 * @property Restaurant[] $restaurants
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employee extends Model
{
    
    static $rules = [
		'name' => 'required',
		'last_name' => 'required',
		'dni' => 'required',
		'gender' => 'required',
		'birthday' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','last_name','dni','gender','birthday'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function restaurants()
    {
        return $this->hasMany('App\Models\Restaurant', 'id1', 'id');
    }
    

}
