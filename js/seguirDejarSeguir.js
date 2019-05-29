var peti_http;

function peticionAJAXNettsuser() {

    peti_http = new XMLHttpRequest();

    if (peti_http) {

        peti_http.onload = gestionarRespuestaSeguir;

        peti_http.open("POST", "ajax/seguir-dejarDeSeguir.php", true);

        peti_http.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        peti_http.send(null);

    }

}
