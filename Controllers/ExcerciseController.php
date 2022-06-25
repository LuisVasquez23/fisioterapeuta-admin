<?php

class ExcerciseController extends Controller
{
    private $data;

    public function __construct($data = null)
    {
        parent::__construct();
    }

    public function render()
    {
        $this->view->render("Excercise", $this->data);
    }

    public function Listar($id = null)
    {
        $this->data = $this->model->FindExcercise($id);
    }
}
