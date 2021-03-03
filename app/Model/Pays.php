<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    protected $table = 'pays';
    
    protected $primaryKey = 'PAY_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'PAY_NOM',
        'PAY_NATIONALITE', 
        
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    //PAYS EST PERE DE REGION

     public function region()
    {
        return $this->hasMany('App\Model\Region', 'PAY_NUM', 'PAY_NUM');
    }
}
