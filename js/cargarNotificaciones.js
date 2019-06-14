/*
    JS encargado de cargar los Netts que ha publicado el propio usuario
 */

var peti_xhr;

// Funcion que realiza la peticion AJAX
function peticionAJAX() {

    peti_xhr = new XMLHttpRequest();
    // Si se ha inicializado correctamente la variable realizo la peticion
    if (peti_xhr) {

        peti_xhr.onload = gestionarRespuesta;

        peti_xhr.open("POST", "ajax/cargarNotificaciones.php", true);

        peti_xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        peti_xhr.send(null); // Se envia a null ya que solo tengo que tratar la respuesta del servidor

    }

}

// Funcion encargada de gestionar la respuesta del servidor
function gestionarRespuesta() {

    let notificaciones = JSON.parse(peti_xhr.responseText); // Respuesta del servidor
    let notiSeg = notificaciones.notifSeguidores; // Lista de notificaciones
    notiSeg.pop();

    // Si la lista de notificaciones no esta vacia, llama a la funcion que cra el cuadro
    if (!notiSeg.length > 0) {

        let cuadro = '<div class="notfication-details"><h3>No tienes ninguna notificacion.</h3></div>';
        document.getElementById("cuadroSeguidores").innerHTML = cuadro;
    // En caso contrario recorro la lista de notificaciones creando un cuadro con cada una y listandolas
    } else {

        for (let i = 0; i < notiSeg.length; i++) {

            let foto = notiSeg[i].foto;
            let id_usuario = notiSeg[i].id_usuario;
            let nombre = notiSeg[i].nombre + " " + notiSeg[i].apellidos;
            let fecha = notiSeg[i].fecha_seg;
            let cuadro = '<div class="notfication-details"><div class="noty-user-img">' +
                         '<img src="images/' + foto + '" alt="Foto usuario"></div>' +
                         '<div class="notification-info"><h3><a href="?pagina=perfil&id='+id_usuario+
                         '" title="Perfil usuario">' + nombre + '</a> te ha seguido. </h3>'+
                         '<span>' + fecha + '</span></div></div>';

            document.getElementById('cuadroSeguidores').innerHTML += cuadro;
        }
    }
}

// Llamada a la funcion
peticionAJAX();
