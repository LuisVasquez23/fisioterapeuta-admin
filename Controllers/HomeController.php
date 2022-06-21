<?php

class HomeController extends Controller
{

    // Constructor
    public function __construct()
    {
        parent::__construct();
        $this->view->render("Home");
    }
}
