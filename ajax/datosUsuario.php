

<?php

require_once "../include.php";

$user=null;

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
