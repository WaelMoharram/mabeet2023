<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class City extends Model
{


    protected $table = 'cities';
    public $timestamps = true;
    use HasTranslations;

    protected $guarded = array('id');

    public $translatable = ['name'];

    public function neighborhoods()
    {
        return $this->hasMany(Neighborhood::class);
    }
}
