<?php

namespace Pages;
use Pages\PageInterface;

class Page implements PageInterface{
    public $pageName;
    public $model;
    public $data = null;

    function __construct() {
        $this->pageName = isset($_GET['page']) && $_GET['page'] ? $_GET['page'] : 'home';
    }

    public function load($path) {

        $this->getHead();
            $this->getHeader();

            $data = $this->data;
            
        include($path);
        
            $this->getFooter();
        $this->getFoot();
    }

    public function getHead()
    {
        include('views/frontend/components/head.php');
    }
    public function getHeader() {

        $data= $this->data;
        $pageName = $this->pageName;

        include('views/frontend/components/header.php');
    }
    public function getFooter() {
        include('views/frontend/components/footer.php');
    }
    public function getFoot()
    {
        include('views/frontend/components/foot.php');
    }


}