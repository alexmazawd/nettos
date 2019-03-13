<?php

require_once "../include.php";

$response = $_POST['nett'];//Espera un post con nombre nett

/**
*
 *
 *          JSONObject = {

 *      contenido: contenido

 *      imagen: nombreimagen,

        };
 *
 * 
 *
 *
 **/

$doc = json_decode($response, true);

$contenido=$doc['contenido'];

$imagen=$doc['imagen'];

if (isset($_COOKIE['logged'])) { //Si esta cookie no existe no se ha iniciado sesion

    $id = $_COOKIE['logged']; //id del usuario que inserta el nett

    $netts = netts::insertDB($contenido,$id,$imagen); //Se inserta el contenido

    return $netts;
}
