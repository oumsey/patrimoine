<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'region';
    
    protected $primaryKey = 'REG_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'REG_NOM',
        'REG_DESCR',
        'PAY_NUM',
        
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    //region est enfant de pays

    public function pays()
    {
        return $this->belongsTo('App\Models\Pays', 'PAY_NUM', 'PAY_NUM');
    }

    //region pere de la ville
    public function ville()
    {
        return $this->hasMany('App\Model\Ville', 'REG_NUM', 'REG_NUM');
    }

}
