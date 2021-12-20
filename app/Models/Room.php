<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->hasOne("App\Models\User", "room_id");
    }
    public function products()
    {
        return $this->belongsToMany("App\Models\Product", "product_room", "room_id");
    }
}
