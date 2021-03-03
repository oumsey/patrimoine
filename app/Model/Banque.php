<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Banque extends Model
{
    protected $table = 'banque';
    
    protected $primaryKey = 'BQE_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'BQE_NOM',
        'BQE_SIGLE',
        'BQE_TEL', 
        
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function agencebancaire()//Mettre le nom de la table enfant chez le père
    {
        return $this->hasMany('App\Model\Agencebancaire', 'BQE_NUM', 'BQE_NUM');
    }
}
