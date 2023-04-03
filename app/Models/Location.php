<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\Countrie;
class Location extends Model
{
    use HasFactory;
    public function departments()
    {
        return $this->hasOne(Department::class);
    }
    public function countries()
    {
        return $this->hasMany(Countrie::class);
    }
}
