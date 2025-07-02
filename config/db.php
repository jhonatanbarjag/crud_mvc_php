<?php
// Database configuration
    class db {
    private $host = 'localhost';
    private $db_name = 'prueba';
    private $user = 'root';
    private $password = '';

    public function conexion(){
        try{
            $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name, $this->user, $this->password);
            return $PDO;

        }catch(PDOException $e){
            return $e->getMessage();    

        }
    }
    }
    $objecto = new db(); // esto crea una instancia de la clase db
    print_r($objecto->conexion()); // esta linea imprime la conexion a la base de datos
?>
