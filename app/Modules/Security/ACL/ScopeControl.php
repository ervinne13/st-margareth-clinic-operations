<?php

namespace App\Modules\Security\ACL;

use Illuminate\Database\Eloquent\Model;

class ScopeControl extends Model
{

    public $incrementing  = false;
    protected $table      = "scope_control";
    protected $primaryKey = "code";
    protected $fillable   = ["code", "level", "display_name"];

}
