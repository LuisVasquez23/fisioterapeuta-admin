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

    public function addCategory(){
        $sql = "INSERT INTO category VALUES(?,'?','?','?','?');";
        
        $stm = $this->conexion->prepare($sql);
        $stm->execute();
        $resultado = $stm->fetchAll();

       return $resultado;
    }
  
    public function dropCategory(){
        $sql = "DELETE FROM category WHERE id_category = ?;";
        
        $stm = $this->conexion->prepare($sql);
        $stm->execute();
        $resultado = $stm->fetchAll();

       return $resultado;
    }
    public function editCategory(){
        $sql = "UPDATE 
        category SET categoria = '?', descripcion = '?',imagen ='?', color_head_tittle='?'
        WHERE id_category = ?;";        
        $stm = $this->conexion->prepare($sql);
        $stm->execute();
        $resultado = $stm->fetchAll();

       return $resultado;
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