//VALIDAR NETT

function validarNett() {

    if (document.getElementById("nett").value.length != 0 || document.getElementById("nett").value != null){

        document.getElementById("envio1Nett").disabled = false;

    }else {

        document.getElementById("envio1Nett").disabled = disabled;

    }

}