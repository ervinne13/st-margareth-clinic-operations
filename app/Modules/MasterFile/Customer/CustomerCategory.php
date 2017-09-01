<?php

namespace App\Modules\MasterFile\Customer;

use Illuminate\Database\Eloquent\Model;

class CustomerCategory extends Model
{

    public $incrementing  = false;
    protected $table      = "customer_category";
    protected $primaryKey = "code";
    protected $fillable   = [
        "code",
        "display_name"
    ];

}
