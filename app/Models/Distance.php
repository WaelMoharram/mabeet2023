<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Distance extends Model
{


    protected $table = 'distances';
    public $timestamps = true;
    use HasTranslations;

    protected $guarded = array('id');

    public $translatable = ['name'];
}
