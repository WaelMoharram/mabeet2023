<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Facility extends Model
{


    protected $table = 'facilities';
    public $timestamps = true;
    use HasTranslations;

    protected $guarded = array('id');

    public $translatable = ['name'];

    public function orders(){
        return $this->belongsToMany(Order::class);
    }

    public function units(){
        return $this->belongsToMany(UnitType::class,'facility_unit_type','facility_id','unit_type_id');
    }
}
