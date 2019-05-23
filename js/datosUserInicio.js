var xhr;

function peticionAJAXdatosUser() {

    xhr = new XMLHttpRequest();

    if (xhr) {

        xhr.onload = gestionarRespuesta;

        xhr.open("POST", "ajax/datosUsuario.php", true);

        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        xhr.send(null);

    }

}

function gestionarRespuesta() {

    let datos = JSON.parse(xhr.responseText);
    let nombre = datos.usuario[0].nombre;
    let apellidos = datos.usuario[0].apellidos;
    let descripcion = datos.usuario[0].bio;

    document.getElementById('nUsuario').innerHTML = nombre + " " + apellidos;
    if (descripcion) {

        document.getElementById('descripcion').innerHTML = descripcion;
    } else {

        document.getElementById('descripcion').innerHTML = "Hey there! I'm using Nettos!";
    }

}

peticionAJAXdatosUser();