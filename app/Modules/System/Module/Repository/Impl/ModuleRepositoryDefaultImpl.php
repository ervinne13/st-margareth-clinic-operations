<?php

namespace App\Modules\System\Module\Repository\Impl;

use App\Modules\Base\Impl\BasicBaseRepository;
use App\Modules\System\Module\Repository\ModuleRepository;
use App\Modules\System\Module\Transformer\ModuleTransformer;
use App\Modules\System\User\UserAccount;

/**
 * Description of ModuleRepositoryDefaultImpl
 *
 * @author Ervinne Sodusta
 */
class ModuleRepositoryDefaultImpl extends BasicBaseRepository implements ModuleRepository {

    /** @var ModuleTransformer */
    protected $moduleTransformer;

    public function __construct(ModuleTransformer $moduleTransformer) {
        $this->moduleTransformer = $moduleTransformer;
    }

    public function getAccessibleModuleTree(UserAccount $user) {
        //  TODO: change later
        return $this->moduleTransformer->listToTree([]);
    }

}
