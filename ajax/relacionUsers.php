
<?php

require_once "../include.php";

$response = $_POST['id_usuario'];//Espera un post con nombre id_usuario y el siguiente formato

/**
 *
 *
 *          JSONObject = {

 *      id : id,

 *      };
 *
 *
 *
 **/

$doc = json_decode($response, true);

$id_seguidor=$_COOKIE['logged']; //id usuario conectado

$id_siguiendo=$doc["id"]; //id del usuario a seguir o dejar de seguir

$relacion = seguidores::searchRelacionDB($id_seguidor, $id_siguiendo); //Funcion para comprobar si existe relacion entre los usuarios

$objeto_json = new stdClass();

$objeto_json->sigue=$relacion; //Devolvera un 1 o un 0 dependiendo de eso el front pondra una cosa u otra en el boton de seguir o dejar de seguir

echo json_encode($objeto_json);