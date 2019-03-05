<?php
/**
 * Created by PhpStorm.
 * User: Vendetta
 * Date: 28/02/2019
 * Time: 15:08
 */

class falso_codigo
{

    public static function searchCodigoInvitacionDB($codigo)
    {
        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->select('falso_codigo', 'codigo',["codigo[=]" => $codigo]);

        $database->closeConnection();

        return $datos;
    }

    public static function insertDB($codigo)

    {

        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->insert('falso_codigo', $codigo);

        $database->closeConnection();

        return $datos;

    }

    public static function removeDB($codigo)
    {
        $database = medoo::getInstance();
        $database->openConnection(MYSQL_CONFIG);
        $datos = $database->delete('falso_codigo', ["codigo[=]" => $codigo]);
        $datos = $datos->rowCount() > 0 ? true : false; //medoo devuelve un objeto statement
        $database->closeConnection();
        return $datos;
    }

}