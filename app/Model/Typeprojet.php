<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Typeprojet extends Model
{
    protected $table = 'typeprojet';
    
    protected $primaryKey = 'TPJ_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'TPJ_LIB',
        
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // Type projet est pere de nature projet

    public function natureprojet()
    {
        $this->hasMany('App\Model\Natureprojet', 'TPJ_NUM', 'TPJ_NUM');
    }
}
