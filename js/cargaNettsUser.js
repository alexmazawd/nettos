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
    for (let i = 0; i < 50; i++) {

        let fotoUser = "images/" + netts[i].foto;
        let imagen = netts[i].imagen;
        let nombre = netts[i].nombre + " " + netts[i].apellidos;
        let contenido = netts[i].contenido;
        let likes = netts[i].likes;
        let user = netts[i].usuario;
        let cuadro = '<div class="post-bar"><div class="post_topbar"><div class="usy-dt"><img src="' +
                     fotoUser + '" alt="Imagen del usuario"><div class="usy-name"><h3>' + nombre +
                     '</div><br><span class="userNaNett">&nbsp&nbsp&nbsp&nbsp@'+ user +'</span></div></div><div class="job_descp"><p>' + contenido + '</p>' +
                     '</div>';

        if (imagen) {

            cuadro += "<img class='fotoNett' src='images/" + imagen + "' class='' alt='Imagen'>";
        }

        cuadro += '<div class="job-status-bar"></div>';

        document.getElementById('seccionNetts').innerHTML += cuadro;
    }
}

peticionAJAXNettsuser();
