<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class UnitOld extends Model
{

    protected $connection = 'mysql2';

    protected $table = 'homes';
    public $timestamps = true;

    protected $guarded = array('id');


    public function images()
    {
        return $this->hasMany(UnitImageOld::class,'home_id');
    }


}
