<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Datejournee extends Model
{
    protected $table = 'datejournee';
    
    protected $primaryKey = 'DJR_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'DJR_LIB',
        'PRD_NUM', 
        
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // DATE JOURNEE EST PERE de Bien. 

     public function bien()//Mettre le nom de la table enfant chez le père
    {
        return $this->hasMany('App\Model\Bien', 'DJR_NUM', 'DJR_NUM');
    }
     public function projet()//Mettre le nom de la table enfant chez le père
    {
        return $this->hasMany('App\Model\Projet', 'DJR_NUM', 'DJR_NUM');
    }
    public function realisation()//Mettre le nom de la table enfant chez le père
    {
        return $this->hasMany('App\Model\Realisation', 'DJR_NUM', 'DJR_NUM');
    }
    public function recettebien()//Mettre le nom de la table enfant chez le père
    {
        return $this->hasMany('App\Model\Realisation', 'DJR_NUM', 'DJR_NUM');
    }


    //DATE JOURNEE EST ENFANT DE PERIODE

    public function periode()
    {
        return $this->belongsTo('App\Models\Periode', 'PRD_NUM', 'PRD_NUM');
    }
    
}
