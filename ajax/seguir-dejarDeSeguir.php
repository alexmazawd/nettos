<?php

require_once "../include.php";

$response = $_POST['relacion'];//Espera un post con nombre relacion y el siguiente formato

//el id que se pasa es del usuario que se seguira o dejara de seguir y el siguen es para que la funcion sepa si va a eliminar o va a insertar

/**
 *
 *
 *          JSONObject = {

 *      id : id
 *      siguen : true/false,

 *      };
 *
 *
 *
 **/

$doc = json_decode($response, true);

$id_seguidor=$_COOKIE['logged']; //id usuario conectado

$id_siguiendo=$doc["id"]; //id del usuario a seguir o dejar de seguir

$relacion = $doc["siguen"]; //esto sera un true o false

if ($relacion) {

    seguidores::dejarDeSeguir($id_seguidor,$id_siguiendo);

} else{

    seguidores::seguirUsuario($id_seguidor,$id_siguiendo);

}
