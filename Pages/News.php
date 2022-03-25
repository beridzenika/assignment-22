<?php

namespace Pages;

use Models\CategoriesModel;
use Models\NewsModel;

class News extends Page{
    protected $categoriesModel;
    protected $newsModel;

    function __construct() {
        $this->categoriesModel = new CategoriesModel();
        $this->newsModel = new NewsModel();
    }

    public function index() {
        $page = isset($_GET['p']) && $_GET['p'] > 0 ? $_GET['p'] : 1 ;
        $limit = 5;
        $offset = ($page - 1) * $limit;

        $categoryId = isset($_GET['category']) && $_GET['category'] ? $_GET['category'] : null;
        $keyword = isset($_GET['keyword']) && $_GET['keyword'] ? $_GET['keyword'] : null;

        $this->data['categories'] = $this->categoriesModel->getCategories();
        $this->data['news'] = $this->newsModel->getFiltered($categoryId, $keyword);
        
        $this->load('views/frontend/news/index.php');
    }

    public function view() {
        $id = $_GET['id'];
        $this->data['categories'] = $this->categoriesModel->getCategories();
        $this->data['news'] = $this->newsModel->getById($id);

        $this->load('views/frontend/news/view.php');
    }
}