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

    public static function insertDB($contenido,$id,$imagen)
    {

        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->insert('netts', [
	                       "id_usuario" => $id,
	                       "contenido" => $contenido,
	                       "imagen" => $imagen]);

        $database->closeConnection();

        return $datos;

    }

}
