<?php

namespace App\ViewComposers\Layout;

use App\Modules\System\Module\Repository\ModuleRepository;
use App\Modules\System\User\UserAccount;
use Illuminate\View\View;

/**
 * Description of SkarlaDynamicAccessLeftNav
 *
 * @author Ervinne Sodusta
 */
class SkarlaDynamicAccessLeftNav {

    /** @var ModuleRepository */
    protected $moduleRepo;

    /**
     * Create a new composer.
     *
     * @param  ModuleRepository $moduleRepo
     * @return void
     */
    public function __construct(ModuleRepository $moduleRepo) {
        // Dependencies automatically resolved by service container...
        $this->moduleRepo = $moduleRepo;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view) {
//        $view->with('moduleTree', $this->moduleRepo->getAccessibleModuleTree(Auth::user()));
        $view->with('moduleTree', $this->moduleRepo->getAccessibleModuleTree(new UserAccount()));
    }

}
