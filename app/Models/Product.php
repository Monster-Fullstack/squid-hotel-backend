<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->belongsToMany("App\Models\User");
    }
    public function rooms()
    {
        return $this->belongsToMany("App\Models\Room", "product_room", "product_id");
    }
}
