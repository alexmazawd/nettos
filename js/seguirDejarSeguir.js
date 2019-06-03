var xhr_ru;

function peticionAJAXRelacionUser() {

    xhr_ru = new XMLHttpRequest();

    if (xhr_ru) {

        xhr_ru.onload = gestionarRespuestaRelacionUser;

        xhr_ru.open("POST", "ajax/relacionUsers.php", true);

        let json = "id_usuario=" + creaJsonRU();

        xhr_ru.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        xhr_ru.send(null);

    }

}

function creaJsonRU() {

    let url = window.location.pathname;

    console.log(url);
}
