<?php

class seguidores

{



    public static function contarSeguidores($id)
    {
        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->count('seguidores', '*', [

            "id_usuario_seguido[=]" => $id]);

        $database->closeConnection();

        return $datos;
    }



    public static function contarSiguiendo($id)
    {
        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->count('seguidores', '*', [

            "id_usuario_seguidor[=]" => $id]);

        $database->closeConnection();

        return $datos;
    }


    public static function searchSiguiendoDB($id)
    {
        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->select('seguidores', 'id_usuario_seguido', [

            "id_usuario_seguidor[=]" => $id]);

        $database->closeConnection();

        return $datos;
    }

    public static function searchRelacionDB($idUser,$idUsuarioASeguir)
    {
        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->count('seguidores', '*',[ "AND" =>
            [
                "id_usuario_seguidor[=]"=>$idUser,
                "id_usuario_seguido[=]" => $idUsuarioASeguir,
            ]
        ]);

        $database->closeConnection();

        return $datos;
    }

    public static function searchNotifSeguido($id) /*Funcion que retorna tod0 sobre las lineas donde el usuario seguido sea el que esta online*/
    {
        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->select("seguidores",

            ["[><]usuarios"=>["seguidores.id_usuario_seguido"=>"id_usuario"]],

            ["usuarios.nombre","usuarios.apellidos","seguidores.fecha_seg","usuarios.foto","usuarios.id_usuario"],

            ["seguidores.id_usuario_seguidor[=]" => $id,"ORDER" => ["seguidores.fecha_seg" => "DESC"]]
        );

        $database->closeConnection();

        return $datos;
    }


    public static function dejarDeSeguir($idUser,$idUsuarioADejarDeSeguir) /* Funcion que elimina la relacion*/
    {
        $database = medoo::getInstance();
        $database->openConnection(MYSQL_CONFIG);
        $datos = $database->delete('seguidores',[ "AND" =>
            [
                "id_usuario_seguidor[=]"=>$idUser,
                "id_usuario_seguido[=]" => $idUsuarioADejarDeSeguir
            ]
        ]);

        $database->closeConnection();
        return $datos;

    }

    public static function seguirUsuario($idUser,$idUsuarioASeguir) /* Funcion que inserta los likes dados a una publicacion*/
    {
        $database = medoo::getInstance();
        $database->openConnection(MYSQL_CONFIG);
        $datos = $database->insert('seguidores',[
                "id_usuario_seguidor"=>$idUser,
                "id_usuario_seguido" => $idUsuarioASeguir
        ]);
        $database->closeConnection();
        return $datos;
    }

}
