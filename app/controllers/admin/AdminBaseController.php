<?php

namespace Admin;

use BaseController;
use View;
use Auth;

class AdminBaseController extends BaseController {


    public function __construct() {

        $this->beforeFilter('auth', array('except' => array('login', 'do_login')));
        $this->beforeFilter('@getCurrentUser', array('except' => array('login', 'do_login')));
        
    }

    public function getCurrentUser($route, $request)   {
        
        View::share(array('current_user' => Auth::user()));
    }

}