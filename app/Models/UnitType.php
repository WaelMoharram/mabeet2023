<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class UnitType extends Model
{


    protected $table = 'unit_types';
    public $timestamps = true;
    use HasTranslations;

    protected $guarded = array('id');

    public $translatable = ['name'];

    public function facilities(){
        return $this->belongsToMany(Facility::class,'facility_unit_type','unit_type_id','facility_id');
    }
}
