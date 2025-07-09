<?php
    class usernameController{
        private $model;

        public function __construct()
        {
            require_once("c://xampp/htdocs/crud_mvc_php/model/usermodel.php");
            $this->model = new usernameModel();
        }

        public function guardar($nombre)
        {
            $id = $this->model->insertar($nombre);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
    }

?>