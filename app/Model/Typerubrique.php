<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Typerubrique extends Model
{
    protected $table = 'typerubrique';
    
    protected $primaryKey = 'TRB_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'TRB_LIB',
        
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    //type rubrique est le pere de rubrique
    public function rubrique()
    {
        return $this->hasMany('App\Model\Rubrique', 'TRB_NUM', 'TRB_NUM');
    }
}
