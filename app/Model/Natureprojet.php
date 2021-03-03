
<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Natureprojet extends Model
{
    protected $table = 'natureprojet';
    
    protected $primaryKey = 'NPJ_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'NPJ_LIB',
        'TPJ_NUM',

    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    //NATURE PROJET  EST ENFANT DE PERIODE DE TYPE PROJET

    public function typeprojet()
    {
        return $this->belongsTo('App\Models\Typeprojet', 'TPJ_NUM', 'TPJ_NUM');
    }

    //NATURE PROJET PERE DE PROJET

    public function projet()
    {
        return $this->hasMamy('App\Model\Projet', 'NPJ_NUM', 'NPJ_NUM');
    }
    
}
