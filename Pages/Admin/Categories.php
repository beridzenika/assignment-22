<?php

namespace Pages\Admin;

use Pages\Admin\Page;
use MOdels\CategoriesModel;

class Categories extends Page {

    function __construct() {
        $this->model = new CategoriesModel();
        Parent::__construct();
    }

    public function index() {

        $this->data['categories'] = $this->model->getAll();

        $this->load('views/admin/categories/index.php');
    }
    
    public function add() {
        $this->load('views/admin/categories/add.php');
    }

    public function store() {
        $title = $_POST['title'];
        $home = $_POST['home'];
    
        $this->model->store($title, $home);

        header('Location: ?type=admin&page=categories');
    }

    public function edit() {
        $id = $_GET['id'];

        $this->data['categories'] = $this->model->getSingle($id);

        $this->load('views/admin/categories/edit.php');
    }

    public function update() {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $home = $_POST['home'];

        $this->model->update($id, $title, $home);

        header('Location: ?type=admin&page=categories');
    }

    public function delete() {
        $id = $_POST['id'];
        
        $this->model->delete($id);

        header('Location: ?type=admin&page=categories');
    }

}