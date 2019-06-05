var xhr_users;

function peticionAJAXBusquedaUsers() {

    xhr_users = new XMLHttpRequest();

    if (xhr_users) {

        xhr_users.onload = gestionarRespuestaBusquedaUsers;

        xhr_users.open("POST", "ajax/busquedaUsuarios.php", true);

        xhr_users.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        xhr_users.send(null);

    }

}

function gestionarRespuestaBusquedaUsers() {

    let resp = JSON.parse(xhr_users.responseText);
    let users = resp.listaUsers;
    if (!users.length > 0) {

        let cuadro = '<div class="notfication-details"><span>No se ha encontrado ningún resultado..</span></div>';

        document.getElementById('usersContainer').innerHTML += cuadro;
    }
    for (let i = 0; i < 50; i++) {

        let fotoUser = "images/" + users[i].foto;
        let nombre = users[i].nombre + " " + users[i].apellidos;
        let usuario = "@" + users[i].usuario;
        let id = users[i].id_usuario;
        let cuadro = '<div class="notfication-details"><div class="noty-user-img">' +
                     '<a href="?pagina=perfil&id='+id+ '"><img src="' + fotoUser +
                     '" alt="Foto del usuario"></a></div>' +
                     '<div class="notification-info"><h3><a href="?pagina=perfil&id='+
                     id + '"> ' + nombre + '</a></h3><span>' + usuario + '</span></div></div>';

        document.getElementById('usersContainer').innerHTML += cuadro;
    }
}

peticionAJAXBusquedaUsers();
