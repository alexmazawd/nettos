<?php

/**
 * Created by PhpStorm.
 * User: Vendetta
 * Date: 15/05/2019
 * Time: 17:08
 */

class favs

{

    public static function cargarFavs($id)
    {
        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->select("favs",

            ["[><]netts"=>["netts.id_nett"=>"id_nett"]],

            ["favs.id_nett","favs.id_usuario","favs.fecha_fav"],

            ["netts.id_usuario[=]" => $id]
        );

        $database->closeConnection();

        return $datos;
    }


    public static function countLikesNett($nett) /* Funcion para contar la cantidad de likes en un nett*/
    {
        $database = medoo::getInstance();
        $database->openConnection(MYSQL_CONFIG);
        $likes = $database->count('favs', '*', ["id_nett[=]" => $nett]);
        $database->closeConnection();
        return $likes;
    }

    public static function darLike($usuario,$nett) /* Funcion que inserta los likes dados a una publicacion*/
    {
        $database = medoo::getInstance();
        $database->openConnection(MYSQL_CONFIG);
        $datos = $database->insert('favs',
            [
                "id_usuario"=>$usuario,
                "id_nett" => $nett,
            ]);
        $database->closeConnection();
        return $datos;
    }

    public static function quitarLike($usuario,$nett) /* Funcion que inserta los likes dados a una publicacion*/
    {
        $database = medoo::getInstance();
        $database->openConnection(MYSQL_CONFIG);
        $datos = $database->delete('favs',[ "AND" =>
            [
                "id_usuario[=]"=>$usuario,
                "id_nett[=]" => $nett,
            ]
    ]);

        $database->closeConnection();
        return $datos;

    }

}