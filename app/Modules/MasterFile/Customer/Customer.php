<?php

namespace App\Modules\MasterFile\Customer;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    
    const NS_CODE = "C";    

    public $incrementing  = false;
    protected $table      = "customer";
    protected $primaryKey = "customer_number";
    protected $fillable   = [
        "customer_number",
        "category_code",
        "display_name",
        "address"
    ];

}
