<?php
    class usernameModel{
        private $PDO;
        public function __construct()
        {
            
                require_once("c://xampp/htdocs/crud_mvc_php/config/db.php");
                $con =new db();
                $this->PDO = $con->conexion();
                // esto crea una instancia de la clase db y llama al metodo conexion para establecer la conexion a la base de datos
            
        }
        public function insertar($nombre)
        {
            $stament = $this->PDO->prepare("INSERT INTO username VALUES(null,:nombre)");
            $stament->bindParam(":nombre",$nombre);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false;


        }
        public function show($id)
        {
            $stament = $this->PDO->prepare("SELECT * FROM username WHERE id = :id LIMIT 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false; 
            // Esto ejecuta la consulta y devuelve el resultado si es exitoso, o false si falla
        }
        public function index()
        {
            $stament = $this->PDO->prepare("SELECT * FROM username");
            return ($stament->execute()) ? $stament->fetchAll() : false;
            // Esto ejecuta la consulta para obtener todos los usuarios y devuelve el resultado
        }
    }

?>