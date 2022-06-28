<?php

class View
{
    public $data;

    public function __construct()
    {
        $this->data = null;
    }


    function render($view, $data = null)
    {
        $this->data = $data;
        $view = file_exists("./Views/$view") ? $view : "404/index.php";
        require_once "Views/$view";
    }
}
