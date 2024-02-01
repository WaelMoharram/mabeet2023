<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class FacilityUnit extends Model
{


    protected $table = 'facility_unit';
    public $timestamps = true;

    protected $guarded = array('id');

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

}
