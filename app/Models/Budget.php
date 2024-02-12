<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Budget extends Model
{

    use HasTranslations;
    public $translatable = ['name'];

    protected $table = 'budgets';
    public $timestamps = true;
//    use HasTranslations;

    protected $guarded = array('id');

//    public $translatable = ['name'];
}
