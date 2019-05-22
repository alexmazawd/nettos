<?php

class seguidores

{

    public static function searchSiguiendoDB($id)
    {
        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->select('seguidores', 'id_usuario_seguido', [

            "id_usuario_seguidor[=]" => $id]);

        $database->closeConnection();

        return $datos;
    }

    public static function searchNotifSeguido($id) /*Funcion que retorna tod0 sobre las lineas donde el usuario seguido sea el que esta onlien*/
    {
        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->select('seguidores', '*', [

            "id_usuario_seguido[=]" => $id]);

        $database->closeConnection();

        return $datos;
    }

}
