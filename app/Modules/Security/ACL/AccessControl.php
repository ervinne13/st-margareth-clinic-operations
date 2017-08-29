<?php

namespace App\Modules\Security\ACL;

use Illuminate\Database\Eloquent\Model;

class AccessControl extends Model
{

    public $incrementing  = false;
    protected $table      = "access_control";
    protected $primaryKey = "code";
    protected $fillable   = ["code", "level", "display_name"];

}
