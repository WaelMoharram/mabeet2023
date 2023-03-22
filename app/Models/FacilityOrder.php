<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class FacilityOrder extends Model
{


    protected $table = 'facility_order';
    public $timestamps = true;

    protected $guarded = array('id');

}
