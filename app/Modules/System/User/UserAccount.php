<?php

namespace App\Modules\System\User;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserAccount extends Authenticatable
{

    use Notifiable;

    public $incrementing  = false;
    protected $table      = "user_account";
    protected $primaryKey = "username";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'display_name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Eager loaded relationships
     * @var array 
     */
    protected $with = [
        "roles", "roles.accessControlList", "roles.accessControlList.module"
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, "user_role", "user_username", "role_code");
    }

    public function locations()
    {
        return $this->belongsToMany(Location::class, "user_location", "user_username", "location_code")->distinct();
    }

    public function companies()
    {
        return $this->belongsToMany(Company::class, "user_location", "user_username", "company_code")->distinct();
    }

    // <editor-fold defaultstate="collapsed" desc="Functions">

    public function getAccessibleModuleList()
    {
        $moduleCodeList = [];

        foreach ( $this->roles AS $role ) {
            $moduleCodeList = array_merge($moduleCodeList, array_column($role->accessControlList->toArray(), "module_code"));
        }

        return $moduleCodeList;
    }

    public function getSerializedRoleNames()
    {
        $roles     = $this->roles;
        $roleNames = array_column($roles->toArray(), "name");

        return implode(", ", $roleNames);
    }

    public function isAdmin()
    {
        return $this->hasRole("ADMIN");
    }

    public function hasRole($roleCode)
    {
        $roleCodes = array_column($this->roles->toArray(), "code");
        return in_array($roleCode, $roleCodes);
    }

    public function hasLocation($locationCode)
    {
        $locationCodes = array_column($this->locations->toArray(), "code");
        return in_array($locationCode, $locationCodes);
    }

    public function getModuleAcces($moduleCode)
    {

        if ( $this->hasRole("ADMIN") ) {
            return "MANAGER";
        }

        foreach ( $this->roles AS $role ) {
            foreach ( $role->accessControlList AS $acl ) {
                if ( $acl->module_code == $moduleCode ) {
                    return $acl->access_control_code;
                }
            }
        }

        return null;
    }

    // </editor-fold>
}
