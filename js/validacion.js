

var READY_STATE_COMPLETE = 4;
var STATUS_RIGTH = 200;
var http_request = null;

function crearRegistrarse() {

    document.getElementById('enviarForm').classList.toggle('hide');
    document.getElementById('restoForm').classList.toggle('hide');
}


function recuperarNettsUser() {

// 1- Inicializo objeto xmlHttpRequest

    http_request = new XMLHttpRequest();

// 2 - Asocio función al evento onload.

// la referencia a la función se indica mediante su nombre sin paréntesis, ya que de otro modo se estaría // ejecutando la función y almacenando el valor devuelto en la propiedad onload.

    http_request.onload = success;

// 3 - Configuro la conexión Ajax

    http_request.open('POST', 'ajax/cargaNettsUser.php', true);

//4 - Establezco una cabecera que permita al servidor saber que tiene que leer $_POST

    http_request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

//5 - Envío la petición Ajax

    http_request.send();

}

function recuperarNettsSeguidor() {

// 1- Inicializo objeto xmlHttpRequest

    http_request = new XMLHttpRequest();

// 2 - Asocio función al evento onload.

// la referencia a la función se indica mediante su nombre sin paréntesis, ya que de otro modo se estaría // ejecutando la función y almacenando el valor devuelto en la propiedad onload.

    http_request.onload = success;

// 3 - Configuro la conexión Ajax

    http_request.open('POST', '../../ajax/cargaNettsUser.php', true);

//4 - Establezco una cabecera que permita al servidor saber que tiene que leer $_POST

    http_request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

//5 - Envío la petición Ajax

    http_request.send();

}

function comprobar() {

// 1- Inicializo objeto xmlHttpRequest

    http_request = new XMLHttpRequest();

// 2 - Asocio función al evento onload.

// la referencia a la función se indica mediante su nombre sin paréntesis, ya que de otro modo se estaría // ejecutando la función y almacenando el valor devuelto en la propiedad onload.

    http_request.onload = success;

// 3 - Configuro la conexión Ajax

    http_request.open('POST', 'requests/compruebaUsuario.php', true);

//4 - Establezco una cabecera que permita al servidor saber que tiene que leer $_POST

    http_request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

//5 - Envío la petición Ajax

    http_request.send('usuario=' + encodeURIComponent(document.getElementById("usuario").value));

}

/*ESTA ES UNA FUNCION DE PRUEBA PARA COMPROBAR SI FUNCIONA LA PETICION AJAX QUE DEVUELVE LOS NETTS DEL USER */

function success(){

    var respuesta_json = http_request.responseText;

    var objeto_json = JSON.parse(respuesta_json);

    if (objeto_json==null){

        alert('no tienes ningun nett');

    } else {

        let id_netts = objeto_json.listaNetts[0].id_nett;

        id_netts += objeto_json.listaNetts[2].id_nett;

        alert(id_netts);
    }
}

/*
function success() {

//6 - Trato la respuesta

// comprueba que se ha recibido la respuesta del servidor (el valor 4 indica que se ha recibido la

// información del servidor y está lista para operar con ella).

    if (http_request.readyState == READY_STATE_COMPLETE) {

// se comprueba que sea válida y correcta (comprobando si el código de estado HTTP devuelto es igual a 200)

        if (http_request.status == STATUS_RIGTH) {

            console.log(http_request.responseText);

            if (http_request.responseText == 'si') {

                document.getElementById('usuario').focus();

                document.getElementById('usuarioSpan').innerHTML = "Ya existe un usuario registrado con ese nombre, por favor inserte uno nuevo";

                document.getElementById('login').disabled = true;

            } else {

                document.getElementById('usuarioSpan').innerHTML = "Nombre de usuario disponible";

                document.getElementById('login').disabled = false;

            }
        }
    }
}

*/


//VALIDAR LOGIN

function validarUser() {

    var valor = document.getElementById("usuario").value;

    var $regExp = /^[a-zA-Z0-9]{5,15}$/;

    if (!$regExp.test(valor)) {

        document.getElementById('usuario').focus();

        document.getElementById('usuarioSpan').innerHTML = "Introduzca entre 5 y 15 carateres alfanumericos";

        return;

    } else
        document.getElementById('usuarioSpan').innerHTML = "";

    comprobar();
}
