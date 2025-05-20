<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    //
    protected $table="employee";

    protected $fillable = [
          
                                "Man_No",
                                "Name",
                                "Email_Address",
                                "Department_Id",
                                "Supervisor"
                        

    ];


     /**
     * Get the department associated with the employee.
     */
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'Department_Id', 'Id');
    }

    public function supervisor(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'Supervisor', 'Man_No');
    }

    public function subordinates(): HasMany
    {
        return $this->hasMany(Employee::class, 'Supervisor', 'Man_No');
    }
}

