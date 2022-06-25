<?php

class HomeController extends Controller
{

    // Constructor
    public function __construct()
    {
        parent::__construct();
    }

    public function render()
    {
        $this->view->render("Home");
    }
}
