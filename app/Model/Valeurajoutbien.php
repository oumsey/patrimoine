<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Valeurajoutbien extends Model
{
    protected $table = 'valeurajoutbien';
    
    protected $primaryKey = 'VBI_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'VBI_VALEUR',
        'VBI_VALEURMOINS', 
        'VBI_DAT',
        'BIE_NUM',
        
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    //valeur ajoutee bien est l'enfant de bien

    ublic function bien()
    {
        return $this->belongsTo('App\Models\Bien', 'BIE_NUM', 'BIE_NUM');
    }
}
