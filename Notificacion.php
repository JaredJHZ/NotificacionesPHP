<?php 
include('Conexion.php');

function getCorreos() {
    $con = new Conexion();
    $con->getConexion();
    $correos = $con -> executeQuery("SELECT * FROM correos;");
    if($correos->num_rows >= 1) {
        while($row = $correos->fetch_assoc()) {
            echo "<tr>";
            echo "<th>" . "<input id=". $row['email'] ." type=" . "checkbox" . "  class = ". "correos" . " >" . "</th>";
            echo "<th>" . $row["email"]  . "</th>";
        }
    }

    $con->closeConexion();
    
}

?>