<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Typecompte extends Model
{
    protected $table = 'typecompte';
    
    protected $primaryKey = 'TCP_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'TCP_LIB', 
        
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // type compte est père de la table compte

     public function compte()//Mettre le nom de la table enfant chez le père
    {
        return $this->hasMany('App\Model\Compte', 'TCP_NUM', 'TCP_NUM');
    }
}
