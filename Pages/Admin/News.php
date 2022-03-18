<?php

namespace Pages\Admin;

use Pages\Admin\Page;
use Models\NewsModel;
use Models\CategoriesModel;

class News extends Page {
    protected $newsModel;
    protected $categoriesModel;

    function __construct() {
        $this->newsModel = new NewsModel();
        $this->categoriesModel = new CategoriesModel();
        Parent::__construct();
    }

    public function index() {
        $this->data['news'] = $this->newsModel->getAll();
        $this->load('views/admin/news/index.php');
    }
    public function add() {
        $this->data['categories'] = $this->categoriesModel->getAll();
        $this->load('views/admin/news/add.php');
    }
    public function store() {
        $title =  $_POST['title'];
        $video =  $_POST['video'];
        $short_text =  $_POST['short_text'];
        $text =  $_POST['text'];
        $category_id =  $_POST['category_id'];

        $this->newsModel->store($title, $video, $short_text, $text, $category_id);

        header('Location: ?type=admin&page=news');
    }
    public function edit() {
        $id = $_GET['id'];

        $this->data['news'] = $this->newsModel->getById($id);
        $this->data['categories'] = $this->categoriesModel->getAll();
        $this->load('views/admin/news/edit.php');
    }
    
    public function update() {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $text = $_POST['text'];
        $short_text = $_POST['short_text'];
        $category_id = $_POST['category_id'];

        $videoName = '';
        if($_FILES['video']['size']) {
            $videoName = $_FILES['video']['name'];
            $tmp = $_FILES['video']['tmp_name'];

            $videoName = 'assets/uploads/news/'.time().'_'.$videoName;

            move_uploaded_file($tmp, $videoName);
        }

        $this->newsModel->update($id, $title, $text, $short_text, $videoName, $category_id);

        header('Location: ?type=admin&page=news');
    }

    
    public function delete() {
        $id = $_POST['id'];
        
        $this->newsModel->delete($id);

        header('Location: ?type=admin&page=news');
    }
}