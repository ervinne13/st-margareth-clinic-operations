<?php

namespace App\Modules\System\Location;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    public $incrementing  = false;
    protected $table      = "company";
    protected $primaryKey = "code";
    protected $fillable   = [
        "code",
        "display_name",
        "description",
        "mode_of_costing"
    ];

}
