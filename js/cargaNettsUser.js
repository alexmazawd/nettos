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

    for (let i = netts.length - 1; i >= 0; i--) {

        let fotoUsr = netts[i].foto;
        let nombre = netts[i].nombre + " " + netts[i].apellidos;
        let contenido = netts[i].contenido;
        let cuadro = '<div class="post-bar"><div class="post_topbar"><div class="usy-dt"><img src="images/' +
                     fotoUsr + '" alt="Imagen del usuario"><div class="usy-name"><h3>' + nombre +
                     '</div></div></div><div class="job_descp"><p>' + contenido + '</p>' +
                     '</div><div class="job-status-bar"><ul class="like-com"><li>' +
                     '<a href="#"><i class="la la-heart"></i> Me gusta</a><span>25</span>' +
                     '</li></ul></div></div>';

        document.getElementById('seccionNetts').innerHTML += cuadro;
    }
}

peticionAJAXNettsuser();
