<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;
    public function truckers(){
        return $this->belongsToMany('App\Models\Trucker');
    }
    public function packages(){
        return $this->hasMany('App\Models\Package');
    }
}

//si a el lo utilizan lleva hasmany