<?php

/**
 * Created by PhpStorm.
 * User: Vendetta
 * Date: 15/05/2019
 * Time: 17:08
 */

class favs

{

    public static function countLikesNett($nett) /* Funcion para contar la cantidad de liker en un nett*/
    {
        $database = medoo::getInstance();
        $database->openConnection(MYSQL_CONFIG);
        $likes = $database->count('favs', '*', ["id_nett[=]" => $nett]);
        $database->closeConnection();
        return $likes;
    }

}