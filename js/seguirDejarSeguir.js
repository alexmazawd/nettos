var xhr_ru;
var xhr_seguir;
var sigue;
var id;

function peticionAJAXRelacionUser() {

    cambiarBtn();

    xhr_ru = new XMLHttpRequest();

    if (xhr_ru) {

        xhr_ru.onload = gestionarRespuestaRelacionUser;

        xhr_ru.open("POST", "ajax/relacionUsers.php", true);

        let json = "id_usuario=" + creaJsonRU();

        xhr_ru.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        xhr_ru.send(json);

    }

}

function creaJsonRU() {

    let url = window.location.href;
    id = url.substr(-1);
    let obj = {
        id: id
    };

    return JSON.stringify(obj);
}

function gestionarRespuestaRelacionUser() {

    resp = JSON.parse(xhr_ru.responseText);
    if (resp.sigue > 0) {
        sigue = true
    } else {
        sigue = false
    }
    peticionAJAXSeguirDejarSeguir();
}

function peticionAJAXSeguirDejarSeguir() {

    xhr_seguir = new XMLHttpRequest();

    if (xhr_seguir) {

        xhr_seguir.onload = gestionarRespuestaSeguirDejarSeguir;

        xhr_seguir.open("POST", "ajax/seguir-dejarDeSeguir.php", true);

        let json = "relacion=" + creaJsonSeguir();

        xhr_seguir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        xhr_seguir.send(json);

    }

}

function gestionarRespuestaSeguirDejarSeguir() {

    console.log("OK!");
}

function creaJsonSeguir() {

    let obj = {
        id: id,
        siguen: sigue
    };

    return JSON.stringify(obj);
}

function cambiarBtn() {

    if (document.getElementById('txtSeguir').innerHTML == "Seguir") {

        document.getElementById('txtSeguir').innerHTML = "Dejar de seguir";
        document.getElementById('simbSeguir').className = "fa fa-minus";
        document.getElementById('btnSeguir').className = "bot1";
    } else {

        document.getElementById('txtSeguir').innerHTML = "Seguir";
        document.getElementById('simbSeguir').className = "la la-plus";
        document.getElementById('btnSeguir').className = "bot";
    }
}
