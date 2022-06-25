<?php

class Model
{
    public $conexion;

    public function __construct()
    {
        $conexion = new Conexion();
        $this->conexion = $conexion->getConeccion();
    }
}
