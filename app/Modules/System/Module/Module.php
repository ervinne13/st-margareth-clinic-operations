<?php

namespace App\Modules\System\Module;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{

    public $incrementing  = false;
    protected $table      = "module";
    protected $primaryKey = "code";
    protected $fillable   = ["code", "max_access_level", "display_name"];

    public function accessControlList()
    {
        return $this->hasMany(AccessControlList::class, "role_code");
    }

    public function scopeNonAdmin($query)
    {
        return $query->where("code", "!=", "ADMIN");
    }

}
