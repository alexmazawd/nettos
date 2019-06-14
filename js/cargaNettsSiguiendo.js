/*
    JS encargado de cargar los Netts de los usuarios a los que se sigue
 */
var peti_xhr;

// Funcion que realiza la peticion AJAX
function peticionAJAXNettsSiguiendo() {

    peti_xhr = new XMLHttpRequest();

    // Si se ha inicializado correctamente la variable realizo la peticion
    if (peti_xhr) {

        peti_xhr.onload = gestionarRespuestaNettsSiguiendo;

        peti_xhr.open("POST", "ajax/cargaNettsSiguiendo.php", true);

        peti_xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        peti_xhr.send(null); // Se envia a null ya que solo tengo que tratar la respuesta del servidor

    }

}

// Funcion encargada de gestionar la respuesta del servidor
function gestionarRespuestaNettsSiguiendo() {

    let JsonObj = JSON.parse(peti_xhr.responseText); // Respuesta del servidor
    let netts = JsonObj.listaNetts; // Lista de netts
    // Si no hay netts muestro un cuadro diciendo que no se han encontrado netts
    if (!netts.length > 0) {

        let cuadro = '<div class="post-bar"><div class="post_topbar">No se ha encontrado ningún nett todavía. Empieza a nettear!</div></div>';
        document.getElementById('seccionNetts').innerHTML = cuadro;
    // En caso contrario recorro la lista de netts creando un cuadro con cada uno y listandolos
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
                '</a></h3></div><br><span class="userNaNett">&nbsp&nbsp&nbsp&nbsp@'+user +'</span></div></div><div class="job_descp"><p>' + contenido + '</p>';
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
peticionAJAXNettsSiguiendo();
