<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Typephase extends Model
{
    protected $table = 'typephase';
    
    protected $primaryKey = 'TPH_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'TPH_LIB',
        
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // TYPE PHASE EST LE PERE DE PHASE

    public function phase()
    {
        $this->hasMany('App\Model\Phase', 'TPH_NUM', 'TPH_NUM');
    }
}
