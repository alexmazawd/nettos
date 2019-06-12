var peti_xhr;
var xhr_favs = new XMLHttpRequest();

function peticionAJAXNettsSiguiendo() {

    peti_xhr = new XMLHttpRequest();

    if (peti_xhr) {

        peti_xhr.onload = gestionarRespuestaNettsSiguiendo;

        peti_xhr.open("POST", "ajax/cargaNettsSiguiendo.php", true);

        peti_xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        peti_xhr.send(null);

    }

}

function gestionarRespuestaNettsSiguiendo() {

    let JsonObj = JSON.parse(peti_xhr.responseText);
    let netts = JsonObj.listaNetts;
    if (!netts.length > 0) {

        let cuadro = '<div class="post-bar"><div class="post_topbar">No se ha encontrado ningún nett todavía. Empieza a nettear!</div></div>';
        document.getElementById('seccionNetts').innerHTML = cuadro;
    } else {

        for (let i = 0; i < netts.length; i++) {

            let fotoUser = "images/" + netts[i].foto;
            let imagen = netts[i].imagen;
            let nombre = netts[i].nombre + " " + netts[i].apellidos;
            let contenido = netts[i].contenido;
            let id = netts[i].id_usuario;
            let user = netts[i].usuario;
            let fecha = netts[i].fecha_pub;
            let cuadro = '<div class="post-bar"><div class="post_topbar"><div class="usy-dt">' +
                '<a href="?pagina=perfil&id='+id+ '"> <img src="' +
                fotoUser + '" alt="Imagen del usuario"></a><div class="usy-name"><h3><a href="?pagina=perfil&id='+id+'"> ' + nombre +
                '</a></h3></div><br><span class="userNaNett">&nbsp&nbsp&nbsp&nbsp@'+user +'</span></div></div><div class="job_descp"><p>' + contenido + '</p>' +
                '</div>';

            if (imagen) {

                cuadro += "<img class='fotoNett' src='images/" + imagen + "' class='' alt='Imagen'>";
            }

            cuadro += '<div class="job-status-bar"><span>' + fecha + '</span></div></div>';

            document.getElementById('seccionNetts').innerHTML += cuadro;
        }
    }

}

peticionAJAXNettsSiguiendo();
