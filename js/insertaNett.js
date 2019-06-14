/*
    JS encargado de enviar al servidor la publicacion del usuario
 */

var xhr;

// Funcion encargada de crear el JSON con el contenido de la publicacion
function creaJsonObj() {

    let nett = document.getElementById('nett').value;
    let imagen = document.getElementById("imgNett").value;
	let aux = imagen.substr(imagen.indexOf("\\") + 1, imagen.length);
	let nombre = aux.substr(aux.indexOf("\\") + 1, aux.length);


    JSONObject = {

        contenido: nett,
        imagen: nombre

        };

    return JSON.stringify(JSONObject);
}

// Funcion que realiza la peticion AJAX
function peticionAJAX() {

    xhr = new XMLHttpRequest();
    // Si se ha inicializado correctamente la variable realizo la peticion
    if (xhr) {

        xhr.open("POST", "ajax/publicarNetts.php", true);

        var json ="nett="+ creaJsonObj();

        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        xhr.send(json); // Se envia un JSON con el contenido del nett que va a publicar

    }

}
