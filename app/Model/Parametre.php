<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Parametre extends Model
{
    protected $table = 'parametre';
    
    protected $primaryKey = 'PBE_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'PBE_LIB',
        'PBE_LANGUE',
        'PBE_MODEPREVISION',
        'FAM_NUM',
        'DEV_NUM',
        'PHA_NUM',
        
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    //Parametre est enfant de famille, devise, phase

    public function famille()
    {
        return $this->belongsTO('App\Model\Famille', 'FAM_NUM', 'FAM_NUM');
    }
     public function devise()
    {
        return $this->belongsTO('App\Model\Devise', 'DEV_NUM', 'DEV_NUM');
    }
     public function phase()
    {
        return $this->belongsTO('App\Model\Phase', 'PHA_NUM', 'PHA_NUM');
    }
}
