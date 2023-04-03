<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\job;
use App\Models\Dependent;
use App\Models\Department;
class Employee extends Model
{
    use HasFactory;
    public function jobs()
    {
        return $this->hasOne(Job::class);
    }
    // public function dependants()
    // {
    //     return $this->hasMany(Dependent::class);
    // }
    public function departments()
    {
        return $this->hasMany(Department::class);
    }
    
}
