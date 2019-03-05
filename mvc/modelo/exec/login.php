<?php
/**
 * Created by PhpStorm.
 * User: Daw2
 * Date: 15/01/2019
 * Time: 9:44
 */


class Login
{

    public static function existeUser($usuario) {

        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->select('login', '*', ["usuario[=]" => $usuario]);

        $database->closeConnection();

        return $datos;
    }

    public static function searchUsuarioDB($usuario)
    {
        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->select('login', 'clave', [

            "usuario[=]" => $usuario]);

        $database->closeConnection();

        if ($datos)

            return $datos[0];

        else

            return $datos;
    }

    public static function duplicateUsuario($usuario)
    {

        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->select('login', '*', ["usuario[=]" => $usuario]);

        $database->closeConnection();

        return $datos;

    }

    public static function insertDB($data)

    {

        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->insert('login', $data);

        $database->closeConnection();

        return $datos;

    }

}