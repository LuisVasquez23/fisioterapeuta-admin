<?php

class Connection{

    private $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=".SERVER.";dbname=".DBname, USER , PASSWORD);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión realizada Satisfactoriamente";
        } catch (\Throwable $th) {
            echo "No se pudo realizar la conexion. Error: " . $th->getMessage();
        }
    }

    public function getConnection(){
        return $this->connection;
    }

}