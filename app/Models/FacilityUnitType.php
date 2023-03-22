<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class FacilityUnitType extends Model
{


    protected $table = 'facility_unit_type';
    public $timestamps = true;

    protected $guarded = array('id');

}
