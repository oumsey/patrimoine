<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Agencebancaire extends Model
{
    protected $table = 'agencebancaire';
    
    protected $primaryKey = 'AGB_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'AGB_LIB',
        'AGB_TEL',
        'BQE_NUM', 
        
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    //ici la table agence bancaire est fils de la banque

    public function banque()//mettre le nom du père chez l'enfant
    {
        return $this->belongsTo('App\Model\Banque', 'BQE_NUM', 'BQE_NUM');
    }

    // ici la table agence bancaire est le père du compte

    public function compte()//Mettre le nom de la table enfant chez le père
    {
        return $this->hasMany('App\Model\Compte', 'AGB_NUM', 'AGB_NUM');
    }
}
