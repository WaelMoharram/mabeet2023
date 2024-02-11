<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class BookingOld extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $connection = 'mysql2';
    protected $table = 'bookings';
//    protected $guarded = array('id');

    public function home()
    {
        return $this->belongsTo(UnitOld::class, 'home_id', 'id');
    }

}
