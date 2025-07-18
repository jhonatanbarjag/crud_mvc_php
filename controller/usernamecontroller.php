<?php
    class usernameController{
        private $model;

        public function __construct()
        {
            require_once("c://xampp/htdocs/crud_mvc_php/model/usermodel.php"); // Se requiere el modelo de usuario
            // Esto incluye el archivo usermodel.php que contiene la clase usernameModel
            $this->model = new usernameModel();
            // Esto crea una instancia de la clase usernameModel

        }

        public function guardar($nombre)
        {
            $id = $this->model->insertar($nombre);// Llama al método insertar del modelo para guardar el nombre de usuario
            // Esto intenta insertar el nombre de usuario en la base de datos
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php"); // Redirige a la página de creación si la inserción falla
            // Si la inserción es exitosa, redirige a la página de visualización
        }
        public function show($id)
        {
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
            // Llama al método show del modelo para obtener los detalles del usuario por ID
            // Si el usuario existe, devuelve los detalles; si no, redirige a la página de índice 
        }
        public function index()
        {
            return ($this->model->index())? $this->model->index() : false;
            // Llama al método index del modelo para obtener todos los usuarios
            // Si hay usuarios, devuelve la lista; si no, devuelve false
        }
    }

?>