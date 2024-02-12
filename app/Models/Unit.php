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

    protected $appends = ['distance'];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
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

    public function offers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Offer::class);
    }

    public function getDistanceAttribute()
    {
        $haramLatitude = $this->city->lat; // Latitude of the city center
        $haramLongitude = $this->city->lng; // Longitude of the city center

        $placeLatitude = $this->lat;
        $placeLongitude = $this->lng;

        // Calculate distance using Haversine formula
        $earthRadius = 6371000; // Earth's radius in meters
        $deltaLatitude = deg2rad($placeLatitude - $haramLatitude);
        $deltaLongitude = deg2rad($placeLongitude - $haramLongitude);

        $a = sin($deltaLatitude / 2) * sin($deltaLatitude / 2) +
            cos(deg2rad($haramLatitude)) * cos(deg2rad($placeLatitude)) *
            sin($deltaLongitude / 2) * sin($deltaLongitude / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $distance = $earthRadius * $c;

        return $distance;
    }

}
