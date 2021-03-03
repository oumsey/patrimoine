<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $table = 'compte';
    
    protected $primaryKey = 'CPT_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'CPT_NOM',
        'CPT_SOLDE',
        'CPT_TAUX',
        'CPT_SOLDEINITIAL',
        'MBR_NUM',
        'AGB_NUM',
        'TCP_NUM', 
        
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    //ici la table compte est le père de la table carte de crédit, transfert compte

    public function cartecredit()//Mettre le nom de la table enfant chez le père
    {
        return $this->hasMany('App\Model\Cartecredit', 'CPT_NUM', 'CPT_NUM');
    }
     public function transfertcompt()//Mettre le nom de la table enfant chez le père
    {
        return $this->hasMany('App\Model\Transfertcompte', 'CPT_NUM', 'CPT_NUM');
    }
    // ici la table compte est fils de MEMBRE, Agencebancaire, Typecompte.

    public function membre()
    {
        return $this->belongsTo('App\Models\Membre', 'MBR_NUM', 'MBR_NUM');
    }
    }
    public function agencebancaire()
    {
        return $this->belongsTo('App\Models\Agencebancaire', 'AGB_NUM', 'AGB_NUM');
    }
    public function typecompte()
    {
        return $this->belongsTo('App\Models\Typecompte', 'TCP_NUM', 'TCP_NUM');
    }
}
