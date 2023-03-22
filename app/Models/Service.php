<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{


    protected $table = 'services';
    public $timestamps = true;
    use HasTranslations;

    protected $guarded = array('id');

    public $translatable = ['name'];

    public function orders(){
        return $this->belongsToMany(Facility::class);
    }
}
