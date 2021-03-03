<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    protected $table = 'membre';
    
    protected $primaryKey = 'MBR_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'MBR_NOM',
        'MBR_PRE',
        'MBR_DATNAIS',
        'MBR_LIEUNAIS',
        'MBR_EMAIL',
        'MBR_SEX',
        'MBR_PROF',
        'MBR_CIVILITE',
        'MBR_LIENDEPAREN',
        'FAM_NUM',
        'QRT_NUM',
        
    ];

    const CREATED_AT = 'MBR_DATSAISIE';
    const UPDATED_AT = 'MBR_DATMODIF';
    
    // ici la table membre est fils de Famille et de Quartier

    public function famille()//mettre le nom du père chez l'enfant
    {
        return $this->belongsTo('App\Models\Famille', 'FAM_NUM', 'FAM_NUM');
    }
    public function quartier()//mettre le nom du père chez l'enfant
    {
        return $this->belongsTo('App\Models\Quartier', 'QRT_NUM', 'QRT_NUM');
    }
    
    //ici la table membre est père de bien, compte, patrimoine

    public function bien()//Mettre le nom de la table enfant chez le père
    {
        return $this->hasMany('App\Model\Bien', 'MBR_NUM', 'MBR_NUM');
    }
    public function compte()//Mettre le nom de la table enfant chez le père
    {
        return $this->hasMany('App\Model\Compte', 'MBR_NUM', 'MBR_NUM');
    }
     public function patrimoine()//Mettre le nom de la table enfant chez le père
    {
        return $this->hasMany('App\Model\Patrioine', 'MBR_NUM', 'MBR_NUM');
    }
     public function projet()//Mettre le nom de la table enfant chez le père
    {
        return $this->hasMany('App\Model\Projet', 'MBR_NUM', 'MBR_NUM');
    }
}
