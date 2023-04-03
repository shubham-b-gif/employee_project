<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\Region;
class Countrie extends Model
{
    use HasFactory;
    public function regions()
    {
        return $this->hasMany(Region::class);
    }
    public function locations()
    {
        return $this->hasOne(Location::class);
    }
}
