<?php

namespace App\Http\Controllers;

use function view;

class HomeController extends Controller {

    public function index() {
        return view('pages.home.index');
    }

}
