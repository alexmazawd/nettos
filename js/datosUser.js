/*
    JS encargado de cargar los datos del usuario
 */

// Creo 2 variables ya que tengo que hacer 2 peticiones AJAX
var xhr;
var xhr_seguir;

// Funcion que realiza la peticion AJAX de los datos del usuario
function peticionAJAXdatosUser() {

    xhr = new XMLHttpRequest();

    // Si se ha inicializado correctamente la variable realizo la peticion
    if (xhr) {

        xhr.onload = gestionarRespuestaDatosUser;

        xhr.open("POST", "ajax/datosUsuario.php", true);

        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        xhr.send(null); // Se envia a null ya que solo tengo que tratar la respuesta del servidor

    }

}

// Funcion encargada de gestionar la respuesta del servidor de los datos del usuario
function gestionarRespuestaDatosUser() {

    let datos = JSON.parse(xhr.responseText); // Respuesta del servidor
    // Hago esta comprobacion porque hay casos en los que el boton no está y da error
    if (document.getElementById('contBtnSeguir')) {

        /* Si la variable es true es porque es el propio
        perfil del usuario por lo que se elimina el boton de seguir */
        if (datos.usuarioOnline) {

            document.getElementById('contBtnSeguir').remove();
        /* En caso contrario se elimina el publicar nett ya que es el perfil
        de otro usuario y se actualiza el boton de seguir en caso de que le siga ya o no */
        } else {

            document.getElementById('publicarNett').remove();
            actualizaBtnSeguir();
        }
    }

    // Inicializo todas las variables de los datos del usuario
    let nombre = datos.usuario[0].nombre;
    let apellidos = datos.usuario[0].apellidos;
    let descripcion = datos.usuario[0].bio;
    let imagen = "images/" + datos.usuario[0].foto;
    let seguidores = datos.seguidores - 1;
    let netts = datos.netts;
    let siguiendo = datos.siguiendo - 1;
    let usuario = "@" + datos.usuario[0].usuario;
    let url = window.location.href;

    document.getElementById('nUsuario').innerHTML = nombre + " " + apellidos;
    // Si el usuario tiene descripcion aparece su descripcion, si no aparece una por defecto
    if (descripcion) {

        document.getElementById('descripcion').innerHTML = descripcion;
    } else {

        document.getElementById('descripcion').innerHTML = "Hey there! I'm using Nettos!";
    }

    document.getElementById('userNa').innerHTML = usuario;
    document.getElementById('imgPrincipal').src = imagen;
    document.getElementById('nSiguiendo').innerHTML = siguiendo;
    document.getElementById('nSeguidores').innerHTML = seguidores;
    document.getElementById('nNetts').innerHTML = netts;
    document.getElementById('imgSecundaria').src = imagen;
}

/* Funcion encargada de mostrar el boton de seguir de una manera u otra
dependiendo de si el usuario loegueado sigue al otro usuario o no */
function actualizaBtnSeguir() {

    xhr_seguir = new XMLHttpRequest();
    // Si se ha inicializado correctamente la variable realizo la peticion
    if (xhr_seguir) {

        xhr_seguir.onload = gestionarRespuestaSeguirONo;

        xhr_seguir.open("POST", "ajax/relacionUsers.php", true);

        let json = "id_usuario=" + creaJsonSegONo();

        xhr_seguir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        xhr_seguir.send(json); // Se envia un JSON con el id del usuario que esta visitando

    }
}

// Funcion encargada de cambiar el texto y el estilo del boton de seguir
function gestionarRespuestaSeguirONo() {

    resp = JSON.parse(xhr_seguir.responseText);
    let relacion = resp.sigue;

    // Si la relacion es 1 es que le sigue, si no es que no
    if (relacion > 0) {

        document.getElementById('txtSeguir').innerHTML = "Dejar de seguir";
        document.getElementById('simbSeguir').className = "fa fa-minus";
        document.getElementById('btnSeguir').className = "bot1";
    } else {

        document.getElementById('txtSeguir').innerHTML = "Seguir";
        document.getElementById('simbSeguir').className = "la la-plus";
        document.getElementById('btnSeguir').className = "bot";
    }
}

// Funcion encargada de crear el JSON que se enviara al servidor
function creaJsonSegONo() {

    let url = window.location.href; // Coge el ID del usuario de la URL
    id = url.substr(-1);
    let obj = {
        id: id
    };

    return JSON.stringify(obj);
}

// Llamada a las funciones
peticionAJAXdatosUser();
// Si el usuario está en la vista de perfil llamará a la funcion para actualizar el boton
if (window.location.href.includes('perfil')) {

    actualizaBtnSeguir();
}
