<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\Employee;
// use App\Models\Job;
class Department extends Model
{
    use HasFactory;
    public function locations()
    {
        return $this->hasMany(Location::class);
    }
    public function employees()
    {
        return $this->hasOne(Employee::class);
    }
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
