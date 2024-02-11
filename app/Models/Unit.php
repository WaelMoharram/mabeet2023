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


    public function images(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(UnitImage::class);
    }

    public function primaryImage(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(UnitImage::class)->where('is_primary', true);
    }

    public function facilities(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Facility::class)->withPivot('amount');
    }

    public function services(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Service::class,'service_unit');
    }

    public function city(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(City::class,'city_id');
    }

    public function type(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(UnitType::class,'unit_type_id');
    }

    public function budget(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Budget::class,'budget_id');
    }

}
