<?php
    include('Conexion.php');

    $dias = $_POST['dias'];
    $correos = explode( ",", $_POST['correos']);
    $mensaje = $_POST['mensaje'];

    $con = new Conexion();
    $con->getConexion();

    $date = new DateTime();
    $date = $date -> modify("+$dias day");
    $fechaDeNotificacion = $date->format('Y-m-d H:i:s');

    if (sizeof($correos) > 0) {
        for ($i=0; $i < sizeof($correos); $i++) { 
            $query = "INSERT INTO notificaciones(email , notificacion, fecha_de_notificacion) VALUES ('$correos[$i]', '$mensaje', TIMESTAMP '$fechaDeNotificacion')";
            $con->executeQuery($query);
        }
        echo true;
    } else {
        echo false;
    }

    $con->closeConexion();
    

?>