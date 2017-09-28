<?php

namespace App\Modules\System\Module\Transformer;

use Illuminate\Support\Collection;

/**
 * Description of ModuleTransformer
 *
 * @author Ervinne Sodusta
 */
class ModuleTransformer {

    /**
     * TODO: put this in a configuration file
     * @var array
     */
    protected $moduleOrder = [
            [
            "icon"    => "fa-hospital-o",
            "name"    => "OPD",
            "modules" => [
                    ["code" => "CHR", "name" => "Child Health Records", "icon" => "fa-file-archive-o", "url" => "opd/child-health-record"],
            ]
        ],
            [
            "icon"    => "fa-dollar",
            "name"    => "Sales",
            "modules" => [
                    ["code" => "VS", "name" => "Vaccine Sale Journal", "icon" => "fa-dollar", "url" => "sales/vaccine-sale"],
                    ["code" => "AR", "name" => "Accounts Receivable", "icon" => "fa-file-archive-o", "url" => "sales/accounts-receivable"],
            ]
        ],
            [
            "icon"    => "fa-archive",
            "name"    => "Inventory & Purchasing",
            "modules" => [
                    ["code" => "IM", "name" => "Item Movement", "icon" => "fa-send", "url" => "inventory/item-movement"],
                    ["code" => "IL", "name" => "Item Ledger", "icon" => "fa-archive", "url" => "inventory/item-ledger"],
                    ["code" => "PO", "name" => "Purchase Order", "icon" => "fa-shopping-cart", "url" => "inventory/purchase-order"],
            ]
        ],
            [
            "icon"    => "fa-file",
            "name"    => "Master Files",
            "modules" => [
                    ["code" => "NS", "name" => "Number Series", "icon" => "fa-sort-numeric-asc", "url" => "master-files/number-series"],
                    ["code" => "V", "name" => "Vaccines", "icon" => "fa-file-o", "url" => "master-files/vaccine"],
                    ["code" => "I", "name" => "Item", "icon" => "fa-file-o", "url" => "master-files/items"],
                    ["code" => "UOM", "name" => "Unit Of Measurement", "icon" => "fa-file-o", "url" => "master-files/uom"],
                    ["code" => "COM", "name" => "Company", "icon" => "fa-home", "url" => "master-files/companies"],
                    ["code" => "LOC", "name" => "Location", "icon" => "fa-map-marker", "url" => "master-files/locations"],
            ]
        ],
            [
            "icon"    => "fa-lock",
            "name"    => "Security",
            "modules" => [
                    ["code" => "U", "name" => "User", "icon" => "fa-user", "url" => "master-files/users"],
                    ["code" => "R", "name" => "Role", "icon" => "fa-lock", "url" => "security/roles"],
                    ["code" => "ACL", "name" => "ACL", "icon" => "fa-users", "url" => "security/acl"]
            ]
        ],
    ];

    public function listToTree($modules) {

        //  TODO: update later
        return $this->moduleOrder;
        
        $accessibleModuleCodes = array_column($modules, "code");
        $accessibleModuleOrder = [];

        //  loop through all the module groups (or headers: Production, Inventory Mangement, Master Files, etc.)
        foreach ($this->moduleOrder AS $moduleGroup) {

            $accessibleModuleGroup = [
                "icon"    => $moduleGroup["icon"],
                "name"    => $moduleGroup["name"],
                "modules" => []
            ];

            //  each module groups contains modules, check if the user has access
            //  to them, if yes, add the module to the accessible module group
            foreach ($moduleGroup["modules"] AS $module) {
                if (in_array($module["code"], $accessibleModuleCodes)) {
                    array_push($accessibleModuleGroup["modules"], $module);
                }
            }

            //  if the current user has 1 or more modules accessible under this group
            if (count($accessibleModuleGroup["modules"]) > 0) {
                //  add the group to the accessible module order
                array_push($accessibleModuleOrder, $accessibleModuleGroup);
            }
        }

        return $accessibleModuleOrder;
    }

}
