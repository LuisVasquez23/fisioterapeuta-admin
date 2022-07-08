<?php

class AdminModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function listCategories(){

        $sql = "SELECT id_category , categoria_title FROM `category`";
        
        $stm = $this->conexion->prepare($sql);
        $stm->execute();
        $resultado = $stm->fetchAll();

       return $resultado;
    }

    public function listAllCategoriesData(){
        $sql = "SELECT * FROM `category`";
        
        $stm = $this->conexion->prepare($sql);
        $stm->execute();
        $resultado = $stm->fetchAll();

       return $resultado;
    }
    /*Crud categorias*/ 

    public function getCategory($id){
        $sql = "SELECT * FROM `category` WHERE id_category = :id";
        
        $stm = $this->conexion->prepare($sql);
        $stm->bindParam(":id" , $id);
        $stm->execute();
        $resultado = $stm->fetchAll();

       return $resultado;
    }

    public function addCategory($nombre_categoria , $path_img , $color_head){

        $sql = "INSERT INTO category (categoria_title , imagen , color_head_tittle) VALUES(:titulo, :path_img , :color_head );";
        
        $stm = $this->conexion->prepare($sql);
        $stm->bindParam(":titulo" , $nombre_categoria);
        $stm->bindParam(":path_img" , $path_img);
        $stm->bindParam(":color_head" , $color_head);
        $stm->execute();

        $lastInsertId = $this->conexion->lastInsertId();
        $wasInserted = false;
        
        if ($lastInsertId>0) {
            $wasInserted = true;
        }

        return $wasInserted;

    }
  
    public function dropCategory(){
        $sql = "DELETE FROM category WHERE id_category = ?;";
        
        $stm = $this->conexion->prepare($sql);
        $stm->execute();
        $resultado = $stm->fetchAll();

       return $resultado;
    }
    public function editCategory($nombre_categoria , $path_img , $color_head , $id){

        echo $nombre_categoria , $path_img , $color_head , $id;

        $sql = "UPDATE category SET categoria_title = :titulo , imagen = :path_img , color_head_tittle= :color_head WHERE id_category=:id"; 

        $stm = $this->conexion->prepare($sql);
        $stm->bindParam(":titulo" , $nombre_categoria);
        $stm->bindParam(":path_img" , $path_img);
        $stm->bindParam(":color_head" , $color_head);
        $stm->bindParam(":id" , $id);
        $stm->execute();
        
        $lastInsertId = $this->conexion->lastInsertId();
        $wasInserted = false;
        
        if ($lastInsertId>0) {
            $wasInserted = true;
        }

        return $wasInserted;
    }

    /*Crud categorias*/ 

    public function addExercice(){
        $sql = "INSERT INTO exercices VALUES(?,'?','?','?','?',?);";
        
        $stm = $this->conexion->prepare($sql);
        $stm->execute();
        $resultado = $stm->fetchAll();

       return $resultado;
    }
    public function dropExercice(){
        $sql = "DELETE FROM exercices WHERE id_exercice = ?;";
        
        $stm = $this->conexion->prepare($sql);
        $stm->execute();
        $resultado = $stm->fetchAll();

       return $resultado;
    }
    public function editExercice(){
        $sql = "UPDATE 
        exercices SET exercice_name = '?',description = '?',img_path = '?',pdf_path = '?',id_category= '?'
        WHERE id_exercice = ?;";        
        $stm = $this->conexion->prepare($sql);
        $stm->execute();
        $resultado = $stm->fetchAll();

       return $resultado;
    }
}