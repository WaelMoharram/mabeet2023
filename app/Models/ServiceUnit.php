<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServiceUnit extends Model
{


    protected $table = 'service_unit';
    public $timestamps = true;

    protected $guarded = array('id');

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

}
