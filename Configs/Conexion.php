<?php

class Conexion
{

    private $conexion;

    public function __construct()
    {
        try {
            $this->conexion = new PDO("mysql:host=" . SERVER . ";dbname=" . DBNAME , USER, PASSWORD);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\Throwable $th) {
            echo "La conexión ha fallado: " . $th->getMessage();
        }
    }

    public function getConexion()
    {
        return $this->conexion;
    }
}
