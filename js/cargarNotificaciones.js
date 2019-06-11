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
    console.log(notificaciones);
    let notiSeg = notificaciones.notifSeguidores;
    notiSeg.pop();
    let notiFav = notificaciones.notiFavs;

    if (notiSeg.length > 0) {

        creaCuadro(notiSeg, "cuadroSeguidores");
    } else {

        let cuadro = '<div class="notfication-details"><h3>No tienes ninguna notificacion.</h3></div>';

        document.getElementById("cuadroSeguidores").innerHTML += cuadro;
    }

    if (notiFav.length > 0) {

        creaCuadro(notiFav, "cuadroFavs");
    } else {

        let cuadro = '<div class="notfication-details"><h3>No tienes ninguna notificacion.</h3></div>';

        document.getElementById("cuadroFavs").innerHTML += cuadro;
    }


}

function creaCuadro(notis,id) {

    for (let i = 0; i < notis.length; i++) {

        let foto = notis[i].foto;
        let id_usuario = notis[i].id_usuario;
        let nombre = notis[i].nombre + " " + notis[i].apellidos;
        let fecha;
        let tipoNoti;
        if (id == "cuadroSeguidores") {
            fecha = notis[i].fecha_seg;
            tipoNoti = "te ha seguido.";
        } else {
            fecha = notis[i].fecha_fav;
            tipoNoti = 'le ha gustado una publicacion tuya: <br><br> "' + notis[i].contenido + '"';
        }
        let cuadro = '<div class="notfication-details"><div class="noty-user-img">' +
                     '<img src="images/' + foto + '" alt="Foto usuario"></div>' +
                     '<div class="notification-info"><h3><a href="?pagina=perfil&id='+id_usuario+
                     '" title="Perfil usuario">' + nombre + '</a> '+tipoNoti+'</h3>'+
                     '<span>' + fecha + '</span></div></div>';

        document.getElementById(id).innerHTML += cuadro;
    }
}

peticionAJAX();
