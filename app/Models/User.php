<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Traits\Search;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,Search;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
        'phone',
        'verify_code',
        'country_id',
        'gender',
        'active',
        'last_login_at'
    ];
    protected $searchable = ['name','email'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    const TYPES = [
        'client',
        'provider'
    ];
    const TYPE_CLIENT = 'client';
    const TYPE_PROVIDER = 'provider';


    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function units(){
        return $this->hasMany(Unit::class);
    }


    public function setLastLoginAtAttribute($value)
    {
        $this->attributes['last_login_at'] = now(); // Assuming you want to set it to the current timestamp when a user logs in.
    }
}
