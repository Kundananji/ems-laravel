<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    //
    protected $table="employee";


     /**
     * Get the department associated with the employee.
     */
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class,'Department_Id');
    }
}

