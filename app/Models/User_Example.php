<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Example extends Model
{
    use HasFactory;
    public function ejemplares()
    {
        return $this->belongsTo('App\Models\Example');
    }

    public function usuarios()
    {
        return $this->belongsTo('App\Models\User');
    }
}
