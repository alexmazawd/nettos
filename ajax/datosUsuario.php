

<?php

require_once "../include.php";

$user=null;

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


if (isset($_COOKIE['logged'])) { //Si esta cookie no existe no se ha iniciado sesion asi que el usuario es enviado al index

 $id = $_COOKIE['logged'];

    $user = usuarios::searchAllByIdDB($id);

} else {

    redirectTo('index.php');

}

//Utilizamos stdClass, clase vacía sin métodos ni propiedades que nos permite construir objetos genéricos

$objeto_json = new stdClass();

$objeto_json->usuario=$user;

echo json_encode($objeto_json);

//La funcion search Nett User devuelve un array asociativo
// los arrays asociativos al codificarlos a json lo generan automaticamente
