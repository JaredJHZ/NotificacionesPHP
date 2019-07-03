<?php
    include('Notificacion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notificaciones</title>

    <link rel="stylesheet" href="./foundation/css/foundation.min.css">    
    <link rel="stylesheet" href="./estilos.css">
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
</head>
<body>

    <h3 class="centrado" >Gestor de notificaciones</h3>
    
    <div class="grid-container">
            <div class="grid-x">
                    <div class="cell">
                            <h5 class="centrado">Escoge los correos para enviar la notificacion</h5>
                    </div>
            
                    <div class="cell medium-6 large-4" style="margin: 0 auto;">
                            <table>
                                    <thead>
                                      <tr>
                                        <th class="centrado" width="10">Seleccion</th>
                                        <th class="centrado" width="200">E-mail</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Llenar con consulta PHP a tabla de correos -->
                                        <?php  getCorreos();  ?>
                                    </tbody>
                                  </table>
                    </div>
                </div>


                <div class="grid-x" >
                    <form id="formulario" style="margin: 0 auto;">
                            <div class="cell medium-6 large-4" >
                                    <label>
                                             Mensaje de la notificacion
                                            <textarea name="mensaje" placeholder="Mensaje"></textarea>
                                    </label>
                            </div>

  

                        <label>
                             ¿En cuántos días requiere la notificación?
                            <input name="dias" type="number" value="1">
                        </label>

                        <div class="cell">
                            <div style="display:flex; justify-content:center;">
                                <!--Guardar manda la info a un archivo php para que sea guardada jeje-->
                                <button id="botonDeEnviar" style="margin:2px;" type="button" class="success button">Guardar</button>
                                <!--El usuario es reedirigido a la pantalla anterior-->
                                <button style="margin:2px;" type="button" class="alert button">Cancelar</button>
                            </div>    
                        </div>

                    </form>

                    

                </div>

    </div>

<script src="./foundation/js/vendor/foundation.min.js"></script>

<script src="./crearFormulario.js"></script>


</body>

</html>