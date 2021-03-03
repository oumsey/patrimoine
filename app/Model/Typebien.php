<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Typebien extends Model
{
    protected $table = 'typebien';
    
    protected $primaryKey = 'TBI_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'TBI_LIB',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function bien()//Mettre le nom de la table enfant chez le père
    {
        return $this->hasMany('App\Model\Bien', 'TBI_NUM', 'TBI_NUM');
    }
}
