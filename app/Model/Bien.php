<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Banque extends Model
{
    protected $table = 'bien';
    
    protected $primaryKey = 'BIE_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'BIE_LIB',
        'BIE_VALINITIALE',
        'BIE_MODEACQUISITION',
        'BIE_ETAT',
        'BIE_TAUXGESTION', 
        'BIE_FRAISGESTION',
        'BIE_BIENAVECREVENU',
        'DJR_NUM',
        'MBR_NUM',
        'TBI_NUM',
    ];

    const CREATED_AT = 'BIE_DATSAISIE';
    const UPDATED_AT = 'BIE_DATMODIF';

    public function datejournee()//mettre le nom du père chez l'enfant
    {
        return $this->belongsTo('App\Models\Datejournee', 'DJR_NUM', 'DJR_NUM');
    }
     public function membre()//mettre le nom du père chez l'enfant
    {
        return $this->belongsTo('App\Models\Membre', 'MBR_NUM', 'MBR_NUM');
    }
     public function typebien()//mettre le nom du père chez l'enfant
    {
        return $this->belongsTo('App\Models\Typebien', 'TBI_NUM', 'TBI_NUM');
    }

    //bien est le pere de recette

    public function recettebien()
    {
        return $this->hasMany('App\Model\Recettebien', 'BIE_NUM', 'BIE_NUM')
    }
    public function valeurajoutbien()
    {
        return $this->hasMany('App\Model\Valeurajoutbien', 'BIE_NUM', 'BIE_NUM')
    }
}
