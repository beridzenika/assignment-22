<?php

namespace Pages;

use Models\CategoriesModel;
use Models\NewsModel;

class World extends Page{
    protected $categoriesModel;
    protected $newsModel;

    function __construct() {
        $this->categoriesModel = new CategoriesModel();
        $this->newsModel = new NewsModel();
    }

    public function index() {
        $categoryId = 1;

        $this->data['categories'] = $this->categoriesModel->getCategories();
        $this->data['news'] = $this->newsModel->getByCategory($categoryId);
        
        $this->load('views/frontend/world/index.php');
    }

    public function view() {
        $id = $_GET['id'];
        $this->data['news'] = $this->newsModel->getById($id);

        $this->load('views/frontend/world/view.php');
    }
}