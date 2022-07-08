<?php

class App
{
    public function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "/index/";
        $url = rtrim($url, "/");
        $url = explode("/", $url);
        $view = "index";
        

        if (isset($url[0])) {
            if ($url[0] == "") {
                $ControllerClass = "Login";
            } else {
                $ControllerClass = ucfirst($url[0]);
            }
        } else {
            $ControllerClass = "Login";
        }

        
        if ($this->verifyLogIn()) {
            $ControllerClass = "Admin";
        }else{
            $ControllerClass = "Login";
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


        // Vista
        if (isset($url[1])) {
            $view = strtolower($url[1]);
            $view = ucfirst($view);
        }

        // Accion
        if (isset($url[2])) {
            if (method_exists($ControllerObj , $url[2])) {
                $ControllerObj->{$url[2]}();
            }
        }

        // render View
        $ControllerObj->render($view);
    }

    public function verifyLogIn(){
        $logInStarted = false;
        

        if (isset($_SESSION['id_user'])) {
            $logInStarted = true;   
        }

        return $logInStarted;
    }
}
