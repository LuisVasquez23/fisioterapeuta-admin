<?php

class LoginModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function userExist($username , $password){

        $password = md5($password);
        
        $sql = "SELECT id_user , username FROM users WHERE username = :user  AND password = :pass";
        
        $pstm = $this->conexion->prepare($sql);
        $pstm->execute([
            'user' => $username,
            'pass' => $password
        ]);

        $resultado = $pstm->fetchAll();

        return $resultado;

    }
}