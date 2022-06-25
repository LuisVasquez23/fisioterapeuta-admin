<?php

class CategoryController extends Controller
{
    public function __construct(){
        parent::__construct();
        $this->view->render("Category");
    }
}
