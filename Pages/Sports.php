<?php

namespace Pages;

use Models\CategoriesModel;
use Models\NewsModel;

class Sports extends Page{
    protected $categoriesModel;
    protected $newsModel;

    function __construct() {
        $this->categoriesModel = new CategoriesModel();
        $this->newsModel = new NewsModel();
    }

    public function index() {
        $category_id = 2;

        $this->data['categories'] = $this->categoriesModel->getCategories();
        $this->data['news'] = $this->newsModel->getByCategory($category_id);

        $this->load('views/frontend/sports/index.php');
    }

    public function view() {
        $id = $_GET['id'];
        
        $this->data['news'] = $this->newsModel->getById($id);

        $this->load('views/frontend/world/view.php');
    }
}