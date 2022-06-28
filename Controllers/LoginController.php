<?php

class LoginController extends Controller
{
    public function __construct()
    {
        parent::__construct();
       
    }

    public function render($view)
    {
        $this->view->render("Login/$view.php" ,  $this->view->data);
    }

    public function Login(){
        if (isset($_POST['submit-btn'])) {
            $user = $_POST['user'];
            $password = $_POST["password"];

            $userData = $this->model->userExist($user , $password);
            
            if (sizeof($userData) > 0) {

                $_SESSION['id_user'] = $userData[0]['id_user'];
                $_SESSION['username'] = $userData[0]['username'];
                
                header("location: " . URL . "Admin/index");
            }else {
                header("location: " . URL . "Login/UserNotFound/?error");
            }

        }else{
            header("location: " . URL . "Login");
        }
    }

    public function UserNotFound(){
        if (isset($_GET['error'])) {
            $this->view->data = array(
                "mensaje" => "User/password are incorrect",
                "classes" => "alert alert-danger alert-dismissible fade show"
            );
        }
    }

    
}
