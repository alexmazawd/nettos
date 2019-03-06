<?php
/**
 * Created by PhpStorm.
 * User: Vendetta
 * Date: 28/02/2019
 * Time: 15:08
 */

class codigos
{

    public static function searchCodigoInvitacionDB($codigo)
    {
        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->select('codigos', 'codigo',["codigo[=]" => $codigo]);

        $database->closeConnection();

        return $datos;
    }

    public static function insertDB($codigo)

    {

        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->insert('codigos', $codigo);

        $database->closeConnection();

        return $datos;

    }

    public static function removeDB($codigo)
    {
        $database = medoo::getInstance();
        $database->openConnection(MYSQL_CONFIG);
        $datos = $database->delete('codigos', ["codigo[=]" => $codigo]);
        $datos = $datos->rowCount() > 0 ? true : false; //medoo devuelve un objeto statement
        $database->closeConnection();
        return $datos;
    }

}
