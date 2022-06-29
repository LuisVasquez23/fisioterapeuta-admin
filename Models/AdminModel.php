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
}