<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Unit extends Model
{


    protected $table = 'units';
    public $timestamps = true;

    protected $guarded = array('id');

}
