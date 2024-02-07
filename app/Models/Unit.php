<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Unit extends Model
{


    protected $table = 'units';
    public $timestamps = true;

    protected $guarded =['id'];

//    protected $guarded = array('id');


    public function images()
    {
        return $this->hasMany(UnitImage::class);
    }

    public function primaryImage()
    {
        return $this->hasOne(UnitImage::class)->where('is_primary', true);
    }

    public function facility()
    {
        return $this->belongsTo(Facility::class)->withPivot('amount');
    }

}
