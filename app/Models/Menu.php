<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Menu
 *
 * @property $id
 * @property $category
 * @property $classification
 * @property $id_saurcers
 * @property $id_drinks
 * @property $created_at
 * @property $updated_at
 *
 * @property Kitchen[] $kitchens
 * @property Saurcer $saurcer
 * @property Saurcer $saurcer
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Menu extends Model
{

    static $rules = [
		'category' => 'required',
		'classification' => 'required',
		'id_saurcers' => 'required',
		'id_drinks' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['category','classification','id_saurcers','id_drinks'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kitchens()
    {
        return $this->hasMany('App\Models\Kitchen', 'id_menus', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saucer()
    {
        return $this->hasOne('App\Models\Saurcer', 'id', 'id_drinks');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function saurcer()
    {
        return $this->hasOne('App\Models\Saurcer', 'id', 'id_saurcers');
    }


}
