var xhr;

function peticionAJAX() {

    xhr = new XMLHttpRequest();

    if (xhr) {

        xhr.onload = gestionarRespuesta;

        xhr.open("POST", "ajax/cargaNettsSiguiendo.php", true);

        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        xhr.send(null);

    }

}

function gestionarRespuesta() {

    console.log(xhr.responseText);
}
