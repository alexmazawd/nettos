<?php
/**
 * Created by PhpStorm.
 * User: Vendetta
 * Date: 07/03/2019
 * Time: 16:23
 */

class netts{

    public static function searchNettsUser($id)
    {
        $database = medoo::getInstance();
        $database->openConnection(MYSQL_CONFIG);
        $datos = $database->select("netts",

            ["[><]usuarios"=>["netts.id_usuario"=>"id_usuario"]],

            ["netts.id_nett","usuarios.foto","netts.contenido","netts.imagen","netts.fecha_pub","usuarios.usuario","usuarios.nombre","usuarios.apellidos"],

            ["netts.id_usuario[=]" => $id,"ORDER" => ["netts.fecha_pub" => "DESC"], "GROUP" => "netts.id_nett"]);

        $database->closeConnection();
        return $datos;
    }

    public static function contarNetts($id)
    {
        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->count('netts', '*', [

            "id_usuario[=]" => $id]);

        $database->closeConnection();

        return $datos;
    }

    /*
     *    $database = Conexion::getInstance();
        $database->openConnection(MYSQL_CONFIG);
        $sql = "insert into usuarios (nombre) values (:nombre)";
        $pdo = $database->getPdo();
        $query = $pdo->prepare($sql);
        $param = array(":nombre" => $nombre);
        $query->execute($param);
        $datos = $query->rowCount() > 0 ? true : false;
        $database->closeConnection();
        return $datos;
     *
     * */

    public static function searchNettsSeguidor($id)
    {
        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->select("netts",

            ["[><]seguidores"=>["netts.id_usuario"=>"id_usuario_seguido"],"[><]usuarios"=>["netts.id_usuario"=>"id_usuario"]],

            ["netts.id_nett","netts.id_usuario","netts.contenido","netts.imagen","netts.fecha_pub","usuarios.foto","usuarios.usuario","usuarios.nombre","usuarios.apellidos"],

            ["seguidores.id_usuario_seguidor[=]" => $id,"ORDER" => ["netts.fecha_pub" => "DESC"], "GROUP" => "netts.id_nett"]



        );

        $database->closeConnection();

        return $datos;
    }


    public static function insertNettsDB($contenido,$id_usuario,$imagen=null)

    {

        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->insert('netts', [

            "id_usuario" => $id_usuario,

            "contenido" => $contenido,

            "imagen" => $imagen

        ]);

        $database->closeConnection();

        if ($datos){

            return true;

        }else{

            return false;

        }

    }

}
