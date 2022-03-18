<?php

namespace Pages\Admin;

use Pages\Admin\Page;

class Home extends Page {

    function __construct() {
        Parent::__construct();
    }

    public function index() {

        $this->load('views/admin/home/index.php');
    }

}