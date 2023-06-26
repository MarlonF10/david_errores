<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Utencil
 *
 * @property $id
 * @property $name
 * @property $type
 * @property $date_purchase
 * @property $use
 * @property $created_at
 * @property $updated_at
 *
 * @property Kitchen[] $kitchens
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Utencil extends Model
{
    
    static $rules = [
		'name' => 'required',
		'type' => 'required',
		'date_purchase' => 'required',
		'use' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','type','date_purchase','use'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kitchens()
    {
        return $this->hasMany('App\Models\Kitchen', 'id_utencils', 'id');
    }
    

}
