<?php

namespace App\ViewComposers\Layout;

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

/**
 * Description of SkarlaViewComposer
 *
 * @author Ervinne Sodusta
 */
class SkarlaViewComposer {

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view) {
        $view->with('actionName', $this->getActionName());
    }

    protected function getActionName() {
        $splittedAction = explode('@', Route::getCurrentRoute()->getActionName());

        if (count($splittedAction) > 1) {
            $routeAction = $splittedAction[1];
        } else {
            $routeAction = "index";
        }

        return $routeAction;
    }

}
