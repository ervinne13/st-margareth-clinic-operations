<?php

namespace App\Modules\MasterFile\Supplier;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{

    public $incrementing  = false;
    protected $table      = "supplier";
    protected $primaryKey = "supplier_number";
    protected $fillable   = [
        "supplier_number",
        "display_name",
        "address"
    ];

}
