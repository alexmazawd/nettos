<?php
/**
 * Created by PhpStorm.
 * User: Vendetta
 * Date: 15/05/2019
 * Time: 17:07
 */

require_once "../include.php";

$response = $_POST['nett'];//Espera un post con nombre nett que debe tener el id del nett

if (isset($_COOKIE['logged'])) { //Si esta cookie no existe no se ha iniciado sesion asi que el usuario es enviado al index

    $id = $_COOKIE['logged'];

    $likes= favs::countLikesNett($id);

} else {

    $likes=0;

}

//Utilizamos stdClass, clase vacía sin métodos ni propiedades que nos permite construir objetos genéricos

$objeto_json = new stdClass();

$objeto_json->likes=$likes;

echo json_encode($objeto_json);

//La funcion search Nett User devuelve un array asociativo
// los arrays asociativos al codificarlos a json lo generan automaticamente
