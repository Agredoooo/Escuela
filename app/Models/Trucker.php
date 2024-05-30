<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trucker extends Model
{
    use HasFactory;
    public function Trucks(){
        return $this->belongsToMany('App\Models\Truck');
    }
}