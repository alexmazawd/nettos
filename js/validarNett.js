//VALIDAR NETT

function validarNett() {

    document.getElementById("envio1Nett").disabled = false;

    if (document.getElementById("nett").value.length == 0 && document.getElementById("imgNett").value == "") {

        document.getElementById("envio1Nett").disabled = true;
    }

}