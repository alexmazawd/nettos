var xhr;

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

function peticionAJAX() {

    xhr = new XMLHttpRequest();

    if (xhr) {

        xhr.open("POST", "ajax/publicarNetts.php", true);

        var json ="nett="+ creaJsonObj();

        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        xhr.send(json);

    }

}
