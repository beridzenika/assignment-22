<?php

namespace Pages;

use Models\CategoriesModel;
use Models\AboutModel;

class About extends Page{
    protected $categoryModel;
    protected $aboutModel;
    
    function __construct() {
        $this->categoryModel = new CategoriesModel;
        $this->aboutModel = new AboutModel;
        Parent::__construct();
    }

    public function index() {
  
        $this->data['categories'] = $this->categoryModel->getCategories();
        $this->data['about'] = $this->aboutModel->getData();
        $this->load('views/frontend/about/index.php');
    }
}