<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function types()
    {
        return $this->belongsToMany(Type::class);
    }

    public function plate()
    {
        return $this->hasMany(Plate::class);
    }
    public function order()
    {
        return $this->hasMany(Plate::class);
    }

    use HasFactory;
}
