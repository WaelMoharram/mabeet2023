<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class UnitImageOld extends Model
{

    protected $connection = 'mysql2';

    protected $table = 'home_gallery';
    public $timestamps = true;

    protected $guarded = array('id');

}
