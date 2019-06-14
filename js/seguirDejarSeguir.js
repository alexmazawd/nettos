/*
    JS encargado de cargar los datos del usuario
 */

var xhr_ru;
var xhr_seguir;
var sigue;
var id;

// Funcion que realiza la peticion AJAX para comprobar si se siguen o no
function peticionAJAXRelacionUser() {

    // Se llama primero a la funcion que cambia el boton de estado
    cambiarBtn();

    xhr_ru = new XMLHttpRequest();

    // Si se ha inicializado correctamente la variable realizo la peticion
    if (xhr_ru) {

        xhr_ru.onload = gestionarRespuestaRelacionUser;

        xhr_ru.open("POST", "ajax/relacionUsers.php", true);

        let json = "id_usuario=" + creaJsonRU();

        xhr_ru.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        xhr_ru.send(json); // Se envia a null ya que solo tengo que tratar la respuesta del servidor

    }

}

// Funcion que crea el JSON de la relacion de los usuarios
function creaJsonRU() {

    let url = window.location.href;
    id = url.substr(-1);
    let obj = {
        id: id
    };

    return JSON.stringify(obj);
}

/* Inicializa la variable "sigue" a true o false si se siguen o no y llama a la funcion que
se encarga de seguir o dejar de seguir al usuario */
function gestionarRespuestaRelacionUser() {

    resp = JSON.parse(xhr_ru.responseText);
    if (resp.sigue > 0) {
        sigue = true
    } else {
        sigue = false
    }
    peticionAJAXSeguirDejarSeguir();
}

// Funcion que realiza la peticion AJAX para seguir o dejar de seguir
function peticionAJAXSeguirDejarSeguir() {

    xhr_seguir = new XMLHttpRequest();

    if (xhr_seguir) {

        xhr_seguir.onload = gestionarRespuestaSeguirDejarSeguir;

        xhr_seguir.open("POST", "ajax/seguir-dejarDeSeguir.php", true);

        let json = "relacion=" + creaJsonSeguir();

        xhr_seguir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        xhr_seguir.send(json);

    }

}

function gestionarRespuestaSeguirDejarSeguir() {

    console.log("OK!");
}

// Funcion que crea JSON para seguir o dejar de seguir
function creaJsonSeguir() {

    let obj = {
        id: id,
        siguen: sigue
    };

    return JSON.stringify(obj);
}

// Funcion que cambia el texto y el estilo del boton
function cambiarBtn() {

    if (document.getElementById('txtSeguir').innerHTML == "Seguir") {

        document.getElementById('txtSeguir').innerHTML = "Dejar de seguir";
        document.getElementById('simbSeguir').className = "fa fa-minus";
        document.getElementById('btnSeguir').className = "bot1";
    } else {

        document.getElementById('txtSeguir').innerHTML = "Seguir";
        document.getElementById('simbSeguir').className = "la la-plus";
        document.getElementById('btnSeguir').className = "bot";
    }
}
