<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class UnitImage extends Model
{


    protected $table = 'unit_images';
    public $timestamps = true;

    protected $guarded = array('id');

}
