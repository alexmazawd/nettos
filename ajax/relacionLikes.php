<?php

require_once "../include.php";

$response = $_POST['id_nett'];//Espera un post con nombre id_nett y el siguiente formato

/**
 *
 *
 *          JSONObject = {

 *      id_nett : id,

 *      };
 *
 *
 *
 **/

$doc = json_decode($response, true);

$idUser=$_COOKIE['logged']; //id usuario conectado

$id_nett=$doc["id_nett"]; //id del usuario a seguir o dejar de seguir

$relacion = favs::searchLike($idUser, $id_nett); //Funcion para comprobar si existe relacion entre los usuarios

$objeto_json = new stdClass();

$objeto_json->sigue=$relacion; //Devolvera un 1 o un 0 dependiendo de eso el front pondra una cosa u otra en el boton de seguir o dejar de seguir

echo json_encode($objeto_json);