

<?php

require_once "../include.php";

/*{
    usuario: [
    {
    nombre: "veni",
    apellidos: "veni",
    fecha_nac: "2019-12-31",
    bio: "",
    foto: "ajedrez-moros-y-cris",
    fecha_reg: "2019-03-13 14:01:56"
    }
  ]
}*/

$objeto_json = new stdClass();

$objeto_json->usuarioOnline=true;

if (isset($_COOKIE['logged'])) { //Si esta cookie no existe no se ha iniciado sesion asi que el usuario es enviado al index

    $id=$_COOKIE['logged'];

    if (isset($_COOKIE['idPerfil'])){

        $id=$_COOKIE['idPerfil'];

        $objeto_json->usuarioOnline=false;

    }

    $user = usuarios::searchAllByIdDB($id);

    $netts = netts::contarNetts($id);

    $seguidores= seguidores::contarSeguidores($id);

    $siguiendo = seguidores::contarSiguiendo($id);

} else {

    redirectTo('index.php');

}

//Utilizamos stdClass, clase vacía sin métodos ni propiedades que nos permite construir objetos genéricos


$objeto_json->usuario=$user;

$objeto_json->seguidores=$seguidores;

$objeto_json->netts=$netts;

$objeto_json->siguiendo=$siguiendo;

echo json_encode($objeto_json);

//La funcion search Nett User devuelve un array asociativo
// los arrays asociativos al codificarlos a json lo generan automaticamente
