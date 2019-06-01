<?php

require_once "../include.php";

$netts=null;

/*{
    listaNetts: [
    {
    id_nett: "4",
    id_usuario: "3",
    contenido: "soy axl rose",
    imagen: null,
    fecha_pub: "2019-03-13 16:41:47"
    },
    {
    id_nett: "5",
    id_usuario: "3",
    contenido: "axl y su segundo nett",
    imagen: null,
    fecha_pub: "2019-03-13 16:41:55"
        }
    ]
}

*/

if (isset($_COOKIE['logged'])) { //Si esta cookie no existe no se ha iniciado sesion asi que el usuario es enviado al index

    $id = $_COOKIE['logged'];

    if (isset($_COOKIE['idPerfil'])){

        $id=$_COOKIE['idPerfil'];

    }

    $netts = netts::searchNettsUser($id);// para probar eliminar el if y colocar id de un usuario que haya hecho netts

} else {

    redirectTo('index.php');

}

// Recorremos los campos y sus datos devueltos

// para averiguar los nombres de los campos

$objeto_json = new stdClass();

$objeto_json->listaNetts=$netts;

echo json_encode($objeto_json);

//La funcion search Nett User devuelve un array asociativo
//los arrays asociativos al codificarlos a json lo generan automaticamente
