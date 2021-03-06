<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{

    //
    public $timestamps = false;

    public function device(){
        return $this->morphOne(Device::class, 'deviceable');
    }

    public function lectures(){
        return $this->hasMany(Lecture::class);
    }

}
