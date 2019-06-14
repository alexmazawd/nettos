/*
    JS encargado de gestionar la peticion AJAX que devuelve la lista de usuarios de la busqueda
*/

var xhr_users; // Variable para realizar la peticion

// Funcion que realiza la peticion
function peticionAJAXBusquedaUsers() {

    xhr_users = new XMLHttpRequest();

    if (xhr_users) { // Si la variable se ha inicializado bien se realiza la peticion

        xhr_users.onload = gestionarRespuestaBusquedaUsers;

        xhr_users.open("POST", "ajax/busquedaUsuarios.php", true);

        xhr_users.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        xhr_users.send(null); // La peticion se envia a null ya que solo tenemos que trabajar con la respuesta del servidor

    }

}

// Funcion que gestiona la respuesta del servidor
function gestionarRespuestaBusquedaUsers() {

    let resp = JSON.parse(xhr_users.responseText);// Respuesta del servidor
    let users = resp.listaUsers;  // Lista de usuarios que devuelve la busqueda
    // Si la lista está vacia se crea un cuadro indicando que no hay resultados
    if (!users.length > 0) {

        let cuadro = '<div class="notfication-details"><span>No se ha encontrado ningún resultado..</span></div>';

        document.getElementById('usersContainer').innerHTML += cuadro;
    // En caso contrario se recorre la lista creando un cuadro con cada usuario
    } else {

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

}

// Llamada a la funcion
peticionAJAXBusquedaUsers();
