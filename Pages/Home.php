<?php

namespace Pages;

use Pages\Page;
use Models\CategoriesModel;
use Models\MainModel;
use Models\NewsModel;

class Home extends Page {
    protected $categoriesModel;
    protected $mainModel;
    protected $newsModel;

    function __construct() {
        $this->categoriesModel = new CategoriesModel();
        $this->mainModel = new MainModel();
        $this->newsModel = new NewsModel();
        Parent::__construct();
    }

     public function index() {

        $this->data['categories'] = $this->categoriesModel->getCategories();
        $this->data['main'] = $this->mainModel->getData();
        $this->data['news'] = $this->newsModel->getMainNews();
        $this->load('views/frontend/home/index.php');

     }
}