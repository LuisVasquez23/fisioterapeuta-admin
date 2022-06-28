<?php

class AdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();
       
    }

    public function render($view)
    {
        $this->view->render("Admin/$view.php");
    }

    public function Logout(){
        session_destroy();
        header("location: " . URL . "Login/");
    }
}
