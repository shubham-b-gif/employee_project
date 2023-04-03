<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Countrie;
class Region extends Model
{
    use HasFactory;
    public function countries()
    {
        return $this->hasOne(Countrie::class);
    }
}
