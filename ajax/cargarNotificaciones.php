<?php

require_once "../include.php";

$netts=null;

/*{
 {
notifSeguidores: [
{
nombre: "ale",
apellidos: "ale",
fecha_seg: "2019-05-23 20:36:45",
foto: null
},
{
nombre: "axl",
apellidos: "axl",
fecha_seg: "2019-05-23 20:36:48",
foto: null
}
],
notiFavs: [
{
id_nett: "2",
nombre: "veni",
apellidos: "veni",
fecha_fav: "2019-05-15 19:26:00"
},
{
id_nett: "10",
nombre: "ale",
apellidos: "ale",
fecha_fav: "2019-05-23 21:03:14"
},
{
id_nett: "2",
nombre: "axl",
apellidos: "axl",
fecha_fav: "2019-05-23 21:00:59"
},
{
id_nett: "10",
nombre: "axl",
apellidos: "axl",
fecha_fav: "2019-05-23 21:03:01"
}
]
}

*/

$seguidos='';

if (isset($_COOKIE['logged'])) { //Si esta cookie no existe no se ha iniciado sesion asi que el usuario es enviado al index

    $id = $_COOKIE['logged'];

    $seguidos= seguidores::searchNotifSeguido($id);

} else {

    redirectTo('index.php');

}

// Recorremos los campos y sus datos devueltos

// para averiguar los nombres de los campos

$objeto_json = new stdClass();

$objeto_json->notifSeguidores=$seguidos; //dos arrays json que diferencian las notificaciones por like/fav y las de cuando alguien te sigue


echo json_encode($objeto_json);

//La funcion search Nett User devuelve un array asociativo
//los arrays asociativos al codificarlos a json lo generan automaticamente
