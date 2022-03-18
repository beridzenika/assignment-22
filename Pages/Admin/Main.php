<?php

namespace Pages\Admin;

use Pages\Admin\Page;
use Models\MainModel;

class Main extends Page {
    private $mainModel;

    function __construct() {
        $this->mainModel = new MainModel();
        Parent::__construct();
    }

    public function index() {
        $this->data['main'] = $this->mainModel->getData();
        $this->load('views/admin/main/index.php');
    }

    public function update() {
        $title = $_POST['title'];
        $video = $_POST['video'];
        $text = $_POST['text'];

        $this->mainModel->updateData($title, $video, $text);
    
        header('Location: ?type=admin&page=main');
    }   
}