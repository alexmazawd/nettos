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

}
