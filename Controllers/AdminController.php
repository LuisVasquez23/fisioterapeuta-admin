<?php

class AdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function render($view)
    {
        $data = [];

        switch ($view) {
            case "Publicaciones":
                $data = $this->model->listCategories();
            break;
            case "Categories":
                $data = $this->model->listAllCategoriesData();
            break;
        }

        $this->view->render("Admin/$view.php" , $data);
    }

    public function Logout(){
        session_destroy();
        header("location: " . URL . "Login/");
    }

    public function Agregar(){
        if (isset($_POST['agregar'])) {
            $descripcion = $_POST['descripcion'];

            echo $descripcion;
        }
    }
}
