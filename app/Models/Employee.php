<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    //
    protected $table="employee";


     /**
     * Get the department associated with the employee.
     */
    public function department(): HasOne
    {
        return $this->hasOne(Department::class);
    }
}

