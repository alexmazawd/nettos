//VALIDAR NETT

function validarNett() {

    if (document.getElementById("nett").value.length != 0 && document.getElementById("imgNett").value != null){

        document.getElementById("envio1Nett").disabled = false;

    }else {

        document.getElementById("envio1Nett").disabled = true;

    }

}