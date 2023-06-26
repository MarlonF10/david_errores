<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bill
 *
 * @property $id
 * @property $total
 * @property $vat
 * @property $id_ordenes
 * @property $created_at
 * @property $updated_at
 *
 * @property Orderne $orderne
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bill extends Model
{
    
    static $rules = [
		'total' => 'required',
		'vat' => 'required',
		'id_ordenes' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['total','vat','id_ordenes'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function orderne()
    {
        return $this->hasOne('App\Models\Orderne', 'id', 'id_ordenes');
    }
    

}
