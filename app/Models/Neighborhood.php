<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Neighborhood extends Model
{


    protected $table = 'neighborhoods';
    public $timestamps = true;
    use HasTranslations;

    protected $guarded = array('id');

    public $translatable = ['name'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
