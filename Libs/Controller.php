<?php

class Controller
{
    public $view;
    public $model;

    public function __construct()
    {
        $this->view = new View();
    }

    function loadModel($modelo)
    {

        $path = "Models/" . $modelo . "Model.php";

        if (file_exists($path)) {
            require_once $path;

            $modelName = $modelo . "Model";

            $this->model = new $modelName();
        }
    }
}
