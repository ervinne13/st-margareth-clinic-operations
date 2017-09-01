<?php

namespace App\Modules\System\Location;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    public $incrementing  = false;
    protected $table      = "location";
    protected $primaryKey = "code";
    protected $fillable   = [
        "code",
        "is_local",
        "display_name",
        "company_code"
    ];

    public function scopeLocal($query)
    {
        return $query->where("is_local", true);
    }

    public function scopeCompany($query, $company)
    {
        return $query->where("company_code", $company);
    }

}
