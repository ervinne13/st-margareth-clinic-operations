<?php

use App\Modules\Security\ACL\AccessControl;
use App\Modules\Security\ACL\AccessControlList;
use App\Modules\Security\ACL\ScopeControl;
use App\Modules\Security\Role\Role;
use App\Modules\System\User\UserAccount;
use Illuminate\Database\Seeder;

class DefaultRolesAndUsersSeeder extends Seeder
{

    protected $inventoryManagerModules = ["IT", "I", "PO"];
    protected $inventoryViewerModules  = ["IL", "AP"];
    protected $operationsAuthorModules = ["PO", "SJ", "EODC", "CHR", "CIO"];
    protected $operationsViewerModules = ["IL", "AR", "AP", "SOF"];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createRoles();
        $this->createAccessControls();
        $this->createScopeControls();
        $this->createAccessControlLists();
        $this->createAdmin();
    }

    private function createRoles()
    {
        $roles = [
            ["code" => "ADMIN", "display_name" => "Administrator"],
            ["code" => "INVMAN", "display_name" => "Inventory Manager"],
            ["code" => "OPDSTF", "display_name" => "OPD Staff"]
        ];

        Role::insert($roles);
    }

    private function createAccessControls()
    {
        $accessControls = [
            ["code" => "VIEWER", "level" => 1, "display_name" => "Viewer"],
            ["code" => "AUTHOR", "level" => 2, "display_name" => "Author"],
            ["code" => "MANAGER", "level" => 3, "display_name" => "Manager"]
        ];

        AccessControl::insert($accessControls);
    }

    private function createScopeControls()
    {
        $scopeControls = [
            ["code" => "OWNER", "level" => 1, "display_name" => "Owned Documents"],
            ["code" => "LOCATION", "level" => 2, "display_name" => "Same Location"],
            ["code" => "ALL", "level" => 3, "display_name" => "All Documents"]
        ];
        ScopeControl::insert($scopeControls);
    }

    private function createAccessControlLists()
    {

        //  inventory manager
        $inventoryManagerACL = [];

        foreach ( $this->inventoryManagerModules AS $moduleCode ) {
            $inventoryManagerACL[] = [
                "role_code"           => "INVMAN",
                "module_code"         => $moduleCode,
                "access_control_code" => "MANAGER",
                "scope_control_code"  => "LOCATION",
            ];
        }

        foreach ( $this->inventoryViewerModules AS $moduleCode ) {
            $inventoryManagerACL[] = [
                "role_code"           => "INVMAN",
                "module_code"         => $moduleCode,
                "access_control_code" => "VIEWER",
                "scope_control_code"  => "LOCATION",
            ];
        }

        AccessControlList::insert($inventoryManagerACL);

        //  out patient department staff
        $operationsStaffModules = [];

        foreach ( $this->operationsAuthorModules AS $moduleCode ) {
            $operationsStaffModules[] = [
                "role_code"           => "OPDSTF",
                "module_code"         => $moduleCode,
                "access_control_code" => "AUTHOR",
                "scope_control_code"  => "LOCATION",
            ];
        }

        foreach ( $this->operationsViewerModules AS $moduleCode ) {
            $operationsStaffModules[] = [
                "role_code"           => "OPDSTF",
                "module_code"         => $moduleCode,
                "access_control_code" => "VIEWER",
                "scope_control_code"  => "LOCATION",
            ];
        }

        AccessControlList::insert($operationsStaffModules);
    }

    private function createAdmin()
    {
        $password = \Hash::make("secret");

        $admin               = new UserAccount();
        $admin->username     = "admin";
        $admin->display_name = "Administrator";
        $admin->password     = $password;

        $admin->save();

        $role = Role::find('ADMIN');

        $admin->roles()->save($role);
    }

}
