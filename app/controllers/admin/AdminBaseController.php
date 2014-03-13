<?php

namespace Admin;

use BaseController;

class AdminBaseController extends BaseController {


    public function __construct() {

        $this->beforeFilter('auth', array('except' => array('login', 'do_login')));
        
    }

}