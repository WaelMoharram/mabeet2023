<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Order extends Model
{


    protected $table = 'orders';
    public $timestamps = true;

    protected $guarded = array('id');

    const STATUS_NEW = 'new';
    const STATUS_APPROVED = 'approved';
    const STATUS_PRESENTED = 'presented';
    const STATUS_REJECTED = 'rejected';
    const STATUS_CANCELED = 'canceled';
    const STATUS_COMPLETED = 'completed';

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
    public function unitType()
    {
        return $this->belongsTo(UnitType::class, 'unit_type_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function season()
    {
        return $this->belongsTo(Season::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function budget()
    {
        return $this->belongsTo(Budget::class);
    }

    public function distance(){
        return $this->belongsTo(Distance::class,'distance_id');
    }
    public function getCurrentStatusAttribute()
    {
        return $this->statuses()->latest()->first();
    }
    public function offers(){
        return $this->hasMany(Offer::class,'order_id');
    }
    public function myOffer(){
        return $this->offers()->where('provider_id',auth()->id())->first();
    }

    public function OfferPresented(){
        return $this->offers()->where('provider_id',auth()->id())->where('status',Offer::NEW_OFFER)->first();
    }
    public function OfferAccepted(){
        return $this->offers()->where('provider_id',auth()->id())->where('status',Offer::ACCEPTED_OFFER)->first();
    }
    public function OfferCompleted(){
        return $this->offers()->where('provider_id',auth()->id())->where('status',Offer::COMPLETED_OFFER)->first();
    }
    public function orderStatus(){
        if($this->offers()->count()<=0) return self::STATUS_NEW;
        if($this->OfferPresented()) return self::STATUS_PRESENTED;
        if($this->OfferAccepted()) return self::STATUS_APPROVED;
        if($this->OfferCompleted()) return self::STATUS_COMPLETED;
        return self::STATUS_REJECTED;
    }

    public function orderStatusDesctiption(){
        if($this->orderStatus() == self::STATUS_NEW){
            $data['title'] = "تقديم عرض";
            $data['description'] = "اختار احدى وحداتك السكنية لتقديم عرض سعر على الطلب.";
        }
         else{
            $data['title'] = "تفاصيل العرض";
            $data['description'] = "تفاصيل الوحدة السكنية و العرض الذي تم تقديمه.";
        }
         return $data;
    }

}
