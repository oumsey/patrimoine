<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    protected $table = 'realisation';
    
    protected $primaryKey = 'REL_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'REL_LIB',
        'REL_DAT', 
        'DJR_NUM',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    //réalisation est l'enfant de date journée

    public function datejournee()
    {
        return $this->belongsTo('App\Models\Datejournee', 'DJR_NUM', 'DJR_NUM');
    }
}
