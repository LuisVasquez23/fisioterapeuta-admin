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

    public function AgregarPublicacion(){
        if (isset($_POST['agregar'])) {
            $descripcion = $_POST['descripcion'];

            echo $descripcion;
        }
    }

    public function AgregarCategoria(){
        if (isset($_POST["agregar"])) {
           
            $directorio = "uploads/";
            $archivo = $directorio . basename($_FILES['img-ejercicio']['name']);
            $tipo_archivo = strtolower(pathinfo($archivo , PATHINFO_EXTENSION));
            $nombre_archivo = strtoupper($_POST['categoria']) . ".$tipo_archivo";
            $archivo = $directorio.$nombre_archivo;


            // Archivos a guardar
            $nombre_categoria = strtoupper($_POST['categoria']); 
            $color_head = $_POST["color-head"];
            $path_img = URL.$directorio.$nombre_archivo;

             
            if($nombre_archivo != null && $color_head != null){
                if (move_uploaded_file($_FILES['img-ejercicio']['tmp_name'] , $archivo)) {
                    if($this->model->addCategory($nombre_categoria , $path_img , $color_head)){
                        header("location: " . URL . "Admin/Categories/?addSuccess");
                    }else{
                        header("location: " . URL . "Admin/Categories/?addError");
                    }
                }else{
                    echo "No se pudo mover";
                }
            }else{
                echo "Ocurrio error";
            }

        }
    }
}
