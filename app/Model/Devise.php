<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Devise extends Model
{
    protected $table = 'devise';
    
    protected $primaryKey = 'DEV_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'DEV_LIB',
        'DEV_SYMBOLE', 
        
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    //devise est pere de parametre

    public function parametre()//Mettre le nom de la table enfant chez le père
    {
        return $this->hasMany('App\Model\Parametre', 'DEV_NUM', 'DEV_NUM');
    }
}
