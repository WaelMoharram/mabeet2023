<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{


    protected $table = 'pages';
    public $timestamps = true;
    use HasTranslations;

    protected $fillable = array('title','content','image');

    public $translatable = ['title','content'];
}
