<?php

require_once "../include.php";

/*
 *
 *
 * {
    listaNetts: [

    {
        id_nett: "1",
        id_usuario: "1",
        contenido: "hola",
        imagen: null,
        fecha_pub: "2019-03-13 14:14:32"
     },
    {
         id_nett: "2",
         id_usuario: "1",
         contenido: "soy nuevo",
         imagen: null,
         fecha_pub: "2019-03-13 14:14:38"
      },
       {
         id_nett: "3",
         id_usuario: "1",
         contenido: "este es mi tercer nett",
         imagen: null,
         fecha_pub: "2019-03-13 14:14:46"
       },
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
 *
 * */


 if (isset($_COOKIE['logged'])) { //Si esta cookie no existe no se ha iniciado sesion

    $id = $_COOKIE['logged'];

    $netts = netts::searchNettsSeguidor($id); //Para probar esta peticion pueder cambiar la variable id por la id de algun usuario en tu base de datos que siga a otros usuarios


//Utilizamos stdClass, clase vacía sin métodos ni propiedades que nos permite construir objetos genéricos

    $objeto_json = new stdClass();

// Recorremos los campos y sus datos devueltos


    $objeto_json->listaNetts = $netts;

    echo json_encode($objeto_json);

}

//La funcion search Nett User devuelve un array asociativo
// los arrays asociativos al codificarlos a json lo generan automaticamente
