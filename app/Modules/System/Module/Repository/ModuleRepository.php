<?php

namespace App\Modules\System\Module\Repository;

use App\Modules\Base\BaseRepository;
use App\Modules\System\User\UserAccount;

/**
 *
 * @author Ervinne Sodusta
 */
interface ModuleRepository extends BaseRepository {

    function getAccessibleModuleTree(UserAccount $user);
}
