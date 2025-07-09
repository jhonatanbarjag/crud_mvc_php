<?php
// Database configuration
    class db {
    private $host = 'localhost';
    private $db_name = 'prueba';
    private $user = 'root';
    private $password = 'root321';

    public function conexion(){
        try{
            $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name, $this->user, $this->password);
            return $PDO;

        }catch(PDOException $e){
            return $e->getMessage();    

        }
    }
    }
    
?>
