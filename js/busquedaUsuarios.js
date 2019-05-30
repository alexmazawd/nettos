var xhr_users;

function peticionAJAXBusquedaUsers() {

    xhr_users = new XMLHttpRequest();

    if (xhr_users) {

        xhr_users.onload = gestionarRespuestaBusquedaUsers;

        xhr_users.open("POST", "ajax/busquedausuarios.php", true);

        xhr_users.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        xhr_users.send(null);

    }

}

function gestionarRespuestaBusquedaUsers() {

    console.log(xhr_users.responseText);
}

peticionAJAXBusquedaUsers();
