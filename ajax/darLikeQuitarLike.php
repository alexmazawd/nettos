<?php

require_once "../include.php";

$response = $_POST['relacion'];//Espera un post con nombre relacion y el siguiente formato

//el id que se pasa es del nett que se le dara o quitara el like

/**
 *
 *
 *          JSONObject = {

 *      nett : id_nett
 *      liked : true/false,

 *      };
 *
 *
 *
 **/

$doc = json_decode($response, true);

$id_seguidor=$_COOKIE['logged']; //id usuario conectado

$nett=$doc["nett"]; //id del usuario a seguir o dejar de seguir

$liked = $doc["liked"]; //esto sera un true o false

if ($liked) {

     favs::quitarLike($id, $nett);

} else{

    favs::darLike($id, $nett);

}


