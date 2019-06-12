var http_peti;

function peticionAJAXNettsuser() {

    http_peti = new XMLHttpRequest();

    if (http_peti) {

        http_peti.onload = gestionarRespuestaNetts;

        http_peti.open("POST", "ajax/cargaNettsUser.php", true);

        http_peti.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        http_peti.send(null);

    }

}

function gestionarRespuestaNetts() {

    let JsonObj = JSON.parse(http_peti.responseText);
    let netts = JsonObj.listaNetts;
    if (!netts.length > 0) {

        let cuadro = '<div class="post-bar"><div class="post_topbar">No se ha encontrado ningún nett todavía. Empieza a nettear!</div></div>';
        document.getElementById('seccionNetts').innerHTML = cuadro;
    } else {

        for (let i = 0; i < 50; i++) {

            let fotoUser = "images/" + netts[i].foto;
            let imagen = netts[i].imagen;
            let nombre = netts[i].nombre + " " + netts[i].apellidos;
            let contenido = netts[i].contenido;
            let user = netts[i].usuario;
            let fecha = netts[i].fecha_pub;
            let cuadro = '<div class="post-bar"><div class="post_topbar"><div class="usy-dt"><img src="' +
                         fotoUser + '" alt="Imagen del usuario"><div class="usy-name"><h3>' + nombre +
                         '</div><br><span class="userNaNett">&nbsp&nbsp&nbsp&nbsp@'+ user +'</span></div></div><div class="job_descp"><p>' + contenido + '</p>';

            if (imagen) {

                cuadro += "<img class='fotoNett' src='images/" + imagen + "' class='' alt='Imagen'>";
            }

            cuadro += '</div><div class="job-status-bar"><span>' + fecha + '</span></div></div>';

            document.getElementById('seccionNetts').innerHTML += cuadro;
        }
    }

}

peticionAJAXNettsuser();
