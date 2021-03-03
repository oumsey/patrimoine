<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Recettebien extends Model
{
    protected $table = 'recettebien';
    
    protected $primaryKey = 'RBI_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'RBI_FRAISGESTION',
        'RBI_FRAISREPATION', 
        'RBI_DATOPERATION',
        'RBI_MONTANT',
        'DJR_NUM',
        'BIE_NUM'
        
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    //recettebien est enfant de datejournee, bien

    public function datejournee()
    {
        return $this->belongsTo('App\Models\Datejournee', 'DJR_NUM', 'DJR_NUM');
    }
     public function bien()
    {
        return $this->belongsTo('App\Models\Bien', 'BIE_NUM', 'BIE_NUM');
    }
}
