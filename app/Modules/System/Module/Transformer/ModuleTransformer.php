<?php

namespace App\Modules\System\Module\Transformer;

use Illuminate\Support\Collection;

/**
 * Description of ModuleTransformer
 *
 * @author Ervinne Sodusta
 */
class ModuleTransformer
{

    public function listToTree($modules)
    {

        $moduleOrder = config('modules.tree');

        //  TODO: update later
        return $moduleOrder;

        $accessibleModuleCodes = array_column($modules, "code");
        $accessibleModuleOrder = [];

        //  loop through all the module groups (or headers: Production, Inventory Mangement, Master Files, etc.)
        foreach ( $moduleOrder AS $moduleGroup ) {

            $accessibleModuleGroup = [
                "icon"    => $moduleGroup["icon"],
                "name"    => $moduleGroup["name"],
                "modules" => []
            ];

            //  each module groups contains modules, check if the user has access
            //  to them, if yes, add the module to the accessible module group
            foreach ( $moduleGroup["modules"] AS $module ) {
                if ( in_array($module["code"], $accessibleModuleCodes) ) {
                    array_push($accessibleModuleGroup["modules"], $module);
                }
            }

            //  if the current user has 1 or more modules accessible under this group
            if ( count($accessibleModuleGroup["modules"]) > 0 ) {
                //  add the group to the accessible module order
                array_push($accessibleModuleOrder, $accessibleModuleGroup);
            }
        }

        return $accessibleModuleOrder;
    }

}
