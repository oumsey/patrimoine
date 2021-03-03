<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    protected $table = 'commune';
    
    protected $primaryKey = 'COM_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'COM_NOM',
        'COM_DESCR',
        'VIL_NUM', 
        
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function ville()//mettre le nom du père chez l'enfant
    {
        return $this->belongsTo('App\Models\Ville', 'VIL_NUM', 'VIL_NUM');
    }
}
