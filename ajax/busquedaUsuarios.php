<?php

require_once "../include.php";


if (isset($_COOKIE['logged'])) { //Si esta cookie no existe no se ha iniciado sesion

    $nombre=$_COOKIE['busqueda'];

    }

    $users = usuarios::searchNombreDB('Veni');

//Utilizamos stdClass, clase vacía sin métodos ni propiedades que nos permite construir objetos genéricos

    $objeto_json = new stdClass();

// Recorremos los campos y sus datos devueltos

    $objeto_json->listaUsers = $users;

    echo json_encode($objeto_json);


//La funcion search devuelve un array asociativo
// los arrays asociativos al codificarlos a json lo generan automaticamente
