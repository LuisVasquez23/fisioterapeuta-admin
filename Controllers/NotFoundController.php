<?php

class NotFoundController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->render("404");
    }
}
