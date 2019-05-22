var xhr;

function creaJsonObj() {

    let nett = document.getElementById('nett').value;
    let imagen = document.getElementById("imgNett").value;
	let aux = imagen.substr(imagen.indexOf("\\") + 1, imagen.length);
	let nombre = aux.substr(aux.indexOf("\\") + 1, aux.length);

    return JSONObject = {

        contenido: nett,
        imagen: nombre

        };
}

function peticionAJAX() {

    xhr = new XMLHttpRequest();

    if (xhr) {

        xhr.onload = gestionarRespuesta;

        xhr.open("POST", "/nettos/ajax/publicarNetts.php", true);

        var json ="nett="+ creaJsonObj();

        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        xhr.send(json);

    }

}

function gestionarRespuesta() {

    console.log(xhr.responseText);
}
