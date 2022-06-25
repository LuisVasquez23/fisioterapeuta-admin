<?php

class ExcerciseModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function FindExcercise($id = null)
    {

        $sql = "SELECT * FROM preguntas WHERE idpreguntas = ?";

        $resultados = $this->conexion->prepare($sql);
        $resultados->bindParam(1, $id);
        $resultados->execute();

        $data = array();

        if (!$resultados) {
            $data["error"] = "Error de consulta de ejecución, porque: " . $this->conexion->errorInfo()[2];
        } else {
            while ($row = $resultados->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
        }

        return $data;
    }
}
