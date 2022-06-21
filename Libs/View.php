<?php

class View
{
    public function __construct()
    {
        $this->data = null;
    }


    function render($view, $data = null)
    {
        $this->data = $data;
        $view = file_exists("./Views/$view/index.php") ? $view : "404";
        require_once "Views/$view/index.php";
    }
}
