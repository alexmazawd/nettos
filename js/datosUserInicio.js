var xhr;
var xhr_seguir;

function peticionAJAXdatosUser() {

    xhr = new XMLHttpRequest();

    if (xhr) {

        xhr.onload = gestionarRespuestaDatosUser;

        xhr.open("POST", "ajax/datosUsuario.php", true);

        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        xhr.send(null);

    }

}

function gestionarRespuestaDatosUser() {

    let datos = JSON.parse(xhr.responseText);
    console.log(datos);
    if (document.getElementById('contBtnSeguir')) {

        if (datos.usuarioOnline) {

            document.getElementById('contBtnSeguir').remove();
        } else {

            document.getElementById('publicarNett').remove();
            actualizaBtnSeguir();
        }
    }

    let nombre = datos.usuario[0].nombre;
    let apellidos = datos.usuario[0].apellidos;
    let descripcion = datos.usuario[0].bio;
    let imagen = "images/" + datos.usuario[0].foto;
    let seguidores = datos.seguidores - 1;
    let favs = datos.favs;
    let netts = datos.netts;
    let siguiendo = datos.siguiendo - 1;
    let usuario = "@" + datos.usuario[0].usuario;
    let url = window.location.href;

    document.getElementById('nUsuario').innerHTML = nombre + " " + apellidos;
    if (descripcion) {

        document.getElementById('descripcion').innerHTML = descripcion;
    } else {

        document.getElementById('descripcion').innerHTML = "Hey there! I'm using Nettos!";
    }

    document.getElementById('userNa').innerHTML = usuario;
    document.getElementById('imgPrincipal').src = imagen;
    document.getElementById('nSiguiendo').innerHTML = siguiendo;
    document.getElementById('nSeguidores').innerHTML = seguidores;
    document.getElementById('nNetts').innerHTML = netts;
    if (url.includes('perfil')) {
        document.getElementById('nMgs').innerHTML = favs;
    }
    document.getElementById('imgSecundaria').src = imagen;
}

function actualizaBtnSeguir() {

    xhr_seguir = new XMLHttpRequest();

    if (xhr_seguir) {

        xhr_seguir.onload = gestionarRespuestaSeguirONo;

        xhr_seguir.open("POST", "ajax/relacionUsers.php", true);

        let json = "id_usuario=" + creaJsonSegONo();

        xhr_seguir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        xhr_seguir.send(json);

    }
}

function gestionarRespuestaSeguirONo() {

    resp = JSON.parse(xhr_seguir.responseText);
    let relacion = resp.sigue;

    if (relacion > 0) {

        document.getElementById('txtSeguir').innerHTML = "Dejar de seguir";
        document.getElementById('simbSeguir').className = "fa fa-minus";
        document.getElementById('btnSeguir').className = "bot1";
    } else {

        document.getElementById('txtSeguir').innerHTML = "Seguir";
        document.getElementById('simbSeguir').className = "la la-plus";
        document.getElementById('btnSeguir').className = "bot";
    }
}

function creaJsonSegONo() {

    let url = window.location.href;
    id = url.substr(-1);
    let obj = {
        id: id
    };

    return JSON.stringify(obj);
}

peticionAJAXdatosUser();
actualizaBtnSeguir();
