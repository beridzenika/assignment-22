<?php

namespace Pages\Admin;

use Pages\Admin\Page;
use Models\AboutModel;

class About extends Page {

    function __construct() {
        $this->model = new AboutModel;
        Parent::__construct();
    }

    public function index() {
        $this->data['about'] = $this->model->getData();
        $this->load('views/admin/about/index.php');
    }

    public function update() {
        $title = $_POST['title'];
        $text = $_POST['text'];

        $this->model->updateData($title, $text);
    
        header('Location: ?type=admin&page=about');    }   
}