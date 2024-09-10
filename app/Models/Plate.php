<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function orders(){
        return $this->belongsToMany('\App\Models\Order');
    }
    use HasFactory;
}
