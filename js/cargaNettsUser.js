/*
    JS encargado de cargar los Netts que ha publicado el propio usuario
 */

var http_peti;

// Funcion que realiza la peticion AJAX
function peticionAJAXNettsuser() {

    http_peti = new XMLHttpRequest();

    // Si se ha inicializado correctamente la variable realizo la peticion
    if (http_peti) {

        http_peti.onload = gestionarRespuestaNetts;

        http_peti.open("POST", "ajax/cargaNettsUser.php", true);

        http_peti.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        http_peti.send(null); // Se envia a null ya que solo tengo que tratar la respuesta del servidor

    }

}

// Funcion encargada de gestionar la respuesta del servidor
function gestionarRespuestaNetts() {

    let JsonObj = JSON.parse(http_peti.responseText); // Respuesta del servidor
    let netts = JsonObj.listaNetts; // Lista de netts
    if (!netts.length > 0) {

        let cuadro = '<div class="post-bar"><div class="post_topbar">No se ha encontrado ningún nett todavía. Empieza a nettear!</div></div>';
        document.getElementById('seccionNetts').innerHTML = cuadro;
    // En caso contrario recorro la lista de netts creando un cuadro con cada uno y listandolos
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
            // Si el usuario ha publicado una imagen, esta se inserta en la publicacion
            if (imagen) {

                cuadro += "<img class='fotoNett' src='images/" + imagen + "' class='' alt='Imagen'>";
            }

            cuadro += '</div><div class="job-status-bar"><span>' + fecha + '</span></div></div>';
            // Se van añadiendo un nett debajo de otro
            document.getElementById('seccionNetts').innerHTML += cuadro;
        }
    }

}
// Llamada a la funcion
peticionAJAXNettsuser();
