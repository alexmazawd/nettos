var peti_xhr;

function peticionAJAX() {

    peti_xhr = new XMLHttpRequest();

    if (peti_xhr) {

        peti_xhr.onload = gestionarRespuesta;

        peti_xhr.open("POST", "ajax/cargarNotificaciones.php", true);

        peti_xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        peti_xhr.send(null);

    }

}

function gestionarRespuesta() {

    let notificaciones = JSON.parse(peti_xhr.responseText);
    let notiSeg = notificaciones.notifSeguidores;
    notiSeg.pop();

    if (!notiSeg.length > 0) {

        let cuadro = '<div class="notfication-details"><h3>No tienes ninguna notificacion.</h3></div>';
        document.getElementById("cuadroSeguidores").innerHTML += cuadro;
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


peticionAJAX();
