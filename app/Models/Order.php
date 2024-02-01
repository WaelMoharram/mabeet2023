<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Order extends Model
{


    protected $table = 'orders';
    public $timestamps = true;

    protected $guarded = array('id');

    public function facilities(){
        return $this->belongsToMany(Facility::class);
    }
    public function services(){
        return $this->belongsToMany(Service::class);
    }

    public function statuses()
    {
        return $this->hasMany(OrderStatus::class);
    }

    public function getCurrentStatusAttribute()
    {
        return $this->statuses()->latest()->first();
    }
}
