(function(){

   let correos = document.getElementsByClassName('correos');

   let correosSeleccionados = [];

   for(let correo of correos) {
    correo.addEventListener('change', () => {
         if (correo.checked === false) {
             limpiarCorreos(correo.id);
         }else if (correo.checked && !correosSeleccionados.includes(correo.id)) {
             correosSeleccionados.push(correo.id);
         } 

        });
    }

   let enviarFormulario = () => {

    let mensaje = new FormData();

    mensaje.append('correos',correosSeleccionados);
    mensaje.append('dias',document.getElementsByName('dias')[0].value);
    mensaje.append('mensaje',document.getElementsByName('mensaje')[0].value);

    fetch("Gestor.php", {
        method:'POST',
        body : mensaje
    }).then((response) => response.text() ).then((datos) => {
        if (datos) {
           alert("Notificacion agregada");
        } else {
            alert("Debe de seleccionar un correo al menos");
        }
    });
   }

   let limpiarCorreos = (correo) => {
       correosSeleccionados = correosSeleccionados.filter(
           (value) => value !== correo
       )
   }

   let botonDeEnviar = document.getElementById('botonDeEnviar')
                            .addEventListener('click',enviarFormulario);
     
}())