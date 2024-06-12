<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    use HasFactory;
    public function books()
    {
        return $this->belongsTo('App\Models\Libro');
    }

    public function prestamos()
    {
        return $this->hasMany('App\Models\User_Example');
    }
}
