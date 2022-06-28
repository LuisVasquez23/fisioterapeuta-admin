<?php

class NotFoundController extends Controller
{
    public function __construct()
    {
        parent::__construct();
       
    }

    public function render($view)
    {
        echo $view;
        $this->view->render("404/$view.php");
    }
}
