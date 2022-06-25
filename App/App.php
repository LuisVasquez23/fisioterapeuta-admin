<?php

class App
{
    public function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "/Home/";
        $url = rtrim($url, "/");
        $url = explode("/", $url);

        if (isset($url[0])) {
            if ($url[0] == "") {
                $ControllerClass = "Home";
            } else {
                $ControllerClass = ucfirst($url[0]);
            }
        } else {
            $ControllerClass = "Home";
        }

        $pathController = "./Controllers/" . $ControllerClass . "Controller.php";

        if (file_exists($pathController)) {
            $ControllerClass .= "Controller";
            require_once $pathController;
        } else {
            $ControllerClass = "NotFoundController";
            require_once "./Controllers/NotFoundController.php";
        }


        $ControllerObj = new $ControllerClass();
        $ControllerObj->loadModel($url[0]);


        if (isset($url[1])) {
            if (method_exists($ControllerObj, $url[1])) {
                if ($url[2]) {
                    $ControllerObj->{$url[1]}($url[2]);
                } else {
                    $ControllerObj->{$url[1]}();
                }
            }
        }

        $ControllerObj->render();
    }
}
