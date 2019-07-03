<?php
 class Conexion {
     public $servername = 'localhost';
     public $username = 'root';
     public $password = '';
     public $db = 'pineapples';
     public $conn;

     function getConexion() {
        $this->conn = new mysqli($this->servername, $this->username,
         $this->password, $this->db);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        return $this->conn;
     }

     function closeConexion() {
         $this->conn->close();
     }

     function executeQuery($query) {

        $resultado = $this->conn->query($query);

        return $resultado;

        
     }
 }
?>

