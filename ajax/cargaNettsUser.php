
<?php

require_once "../include.php";

if (isset($_COOKIE['logged'])) { //Si esta cookie no existe no se ha iniciado sesion asi que el usuario es enviado al index

    $id = $_COOKIE['logged'];

    $netts = netts::searchNettsUser($id);

} else {

    redirectTo('index.php');

}

$arrNetts = []; //

//Utilizamos stdClass, clase vacía sin métodos ni propiedades que nos permite construir objetos genéricos

$objeto_json = new stdClass();

// Recorremos los campos y sus datos devueltos

// para averiguar los nombres de los campos

foreach ($netts as $field => $value) {

     array_push($arrNetts,$value);

}

$objeto_json->listaNetts=$arrNetts;

echo json_encode($objeto_json);

//La funcion search Nett User devuelve un array asociativo
// los arrays asociativos al codificarlos a json lo generan automaticamente
