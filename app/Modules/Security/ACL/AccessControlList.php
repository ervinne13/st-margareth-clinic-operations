<?php

namespace App\Modules\Security\ACL;

use Illuminate\Database\Eloquent\Model;

class AccessControlList extends Model
{

    public $incrementing  = false;
    protected $table      = "access_control_list";
    protected $primaryKey = ["role_code", "module_code", "access_control_code"];
    protected $fillable   = ["role_code", "module_code", "access_control_code"];

}
