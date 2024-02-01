<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class OrderStatus extends Model
{


    protected $table = 'order_statuses';
    public $timestamps = true;

    protected $guarded = array('id');

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    const STATUSES = [
        'pending',
        'accepted',
        'rejected',
        'canceled',
        'completed'
    ];
    const STATUS_COLOR = [
        'pending'=>'warning',
        'accepted'=>'success',
        'rejected'=>'danger',
        'canceled'=>'danger',
        'completed'=>'success'
    ];
}
