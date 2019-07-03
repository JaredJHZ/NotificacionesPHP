<?php
    include('conexion.php');
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    
    $con = new Conexion();

    $con -> getConexion();

    $notificaciones = $con -> executeQuery("SELECT id, email, notificacion,fecha_de_notificacion FROM notificaciones WHERE enviada = FALSE ;");

    if($notificaciones->num_rows >= 1) {
        while($notificacion =  $notificaciones->fetch_assoc()) {

            $fecha = $notificacion['fecha_de_notificacion'];
            $date = new DateTime($fecha);
            $now = new DateTime();
            $id = $notificacion['id'];

            if ($date <= $now) {
                $mensaje = $notificacion['notificacion'];
                $destinatario = $notificacion['email'];
                $from = "test@hostinger-tutorials.com"; // poner correo
                $asunto = "Notificacion";
                $headers = "From:" . $from;
                mail($destinatario,$asunto,$mensaje, $headers);
                echo "El email fue enviado";
                $enviada = "UPDATE notificaciones SET enviada = TRUE where id = $id";
                $con -> executeQuery($enviada);
            } else {
                echo "Aun no hay notificaciones por enviar";
            }
           
        }   

    }

    $con->closeConexion();

