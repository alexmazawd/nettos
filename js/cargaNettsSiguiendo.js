var peti_xhr;
var xhr_favs = new XMLHttpRequest();

function peticionAJAXNettsSiguiendo() {

    peti_xhr = new XMLHttpRequest();

    if (peti_xhr) {

        peti_xhr.onload = gestionarRespuestaNettsSiguiendo;

        peti_xhr.open("POST", "ajax/cargaNettsSiguiendo.php", true);

        peti_xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        peti_xhr.send(null);

    }

}

function gestionarRespuestaNettsSiguiendo() {

    let JsonObj = JSON.parse(peti_xhr.responseText);
    let netts = JsonObj.listaNetts;

    for (let i = netts.length - 1; i >= 0; i--) {

        let fotoUser = "images/" + netts[i].foto;
        let imagen = netts[i].imagen;
        let nombre = netts[i].nombre + " " + netts[i].apellidos;
        let contenido = netts[i].contenido;
        let id = netts[i].id_usuario;
        let favs = netts[i].likes;
        let cuadro = '<div class="post-bar"><div class="post_topbar"><div class="usy-dt"><img src="' +
            fotoUser + '" alt="Imagen del usuario"><div class="usy-name"><h3>' + nombre +
            '</div><br><span class="userNaNett">&nbsp&nbsp&nbsp&nbsp@sagitario</span></div></div><div class="job_descp"><p>' + contenido + '</p>' +
            '</div>';

        if (imagen) {

            cuadro += "<img src='images/" + imagen + "' class='' alt='Imagen'>";
        }

        cuadro += '<div class="job-status-bar"><ul class="like-com"><li>' +
        '<a href="#"><i class="la la-heart"></i>Me gusta</a><span>' + favs +
        '</span></li></ul></div></div>';

        document.getElementById('seccionNetts').innerHTML += cuadro;
    }
}

peticionAJAXNettsSiguiendo();
