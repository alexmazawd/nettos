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
        $datos = $database->select('netts', '*', ["id_usuario[=]" => $id]);
        $database->closeConnection();
        return $datos;
    }

    public static function searchNettsSeguidor($id)
    {
        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos=[];

        foreach ($id as $value) {

            $select = $database->select('netts', '*', ["id_usuario[=]" => $value]);

            array_push($datos, $select);

        }

        $database->closeConnection();

        return $datos;
    }


    public static function insertDB($contenido,$id_usuario,$imagen=null)

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