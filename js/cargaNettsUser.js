var xhr;

function peticionAJAXNettsuser() {

    xhr = new XMLHttpRequest();

    if (xhr) {

        xhr.onload = gestionarRespuestaNetts;

        xhr.open("POST", "ajax/cargaNettsUser.php", true);

        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        xhr.send(null);

    }

}

function gestionarRespuestaNetts() {
    console.log("entra");
    console.log(xhr.responseText);
}

peticionAJAXNettsuser();
