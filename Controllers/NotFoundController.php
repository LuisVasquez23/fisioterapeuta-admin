<?php

class NotFoundController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->render("404");
    }

    public function MethodNotFound()
    {
        $this->view->render("404");
    }
}
