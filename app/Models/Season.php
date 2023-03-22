<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Season extends Model
{


    protected $table = 'seasons';
    public $timestamps = true;
    use HasTranslations;

    protected $guarded = array('id');

    public $translatable = ['name'];
}
