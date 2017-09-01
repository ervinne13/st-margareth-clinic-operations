<?php

namespace App\Modules\OPD\Vaccine;

use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{

    public $incrementing  = false;
    protected $table      = "vaccine";
    protected $primaryKey = "vaccine_name";
    protected $fillable   = [
        "vaccine_name", "required_dose_count", "required_booster_dose_count"
    ];

}
