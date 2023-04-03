<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Department;
class Job extends Model
{
    use HasFactory;
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
    // public function departments()
    // {
    //     return $this->hasMany(Department::class);
    // }
}
