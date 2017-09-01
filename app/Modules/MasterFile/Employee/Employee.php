<?php

namespace App\Modules\MasterFile\Employee;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    public $incrementing  = false;
    protected $table      = "employee";
    protected $primaryKey = "employee_number";
    protected $fillable   = [
        "employee_number",
        "title",
        "type",
        "first_name",
        "last_name"
    ];

}
