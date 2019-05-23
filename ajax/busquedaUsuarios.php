<?php

require_once "../include.php";


if (isset($_COOKIE['logged'])) { //Si esta cookie no existe no se ha iniciado sesion

    $id = $_COOKIE['logged'];

    $nombre = getGet('busqueda');

    $users = usuarios::searchNombreDB($nombre); //Espera recibir por la url con el nombre busqueda el parametro para buscar

    //EJEMPLO:  http://localhost/nettosUltVersion/nettos/index.php?pagina=busqueda&busqueda=alejandro

//Utilizamos stdClass, clase vacía sin métodos ni propiedades que nos permite construir objetos genéricos

    $objeto_json = new stdClass();

// Recorremos los campos y sus datos devueltos


    $objeto_json->listaUsers = $users;

    echo json_encode($objeto_json);

}

//La funcion search devuelve un array asociativo
// los arrays asociativos al codificarlos a json lo generan automaticamente
