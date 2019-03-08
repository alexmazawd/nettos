<?php
/**
 * Created by PhpStorm.
 * User: Daw2
 * Date: 15/01/2019
 * Time: 9:44
 */


class usuarios
{

    public static function existeUser($usuario) {

        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->select('usuarios', '*', ["usuario[=]" => $usuario]);

        $database->closeConnection();

        return $datos;
    }

    public static function searchUsuarioDB($usuario)
    {
        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->select('usuarios', 'clave', [

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

        $datos = $database->select('usuarios', '*', ["usuario[=]" => $usuario]);

        $database->closeConnection();

        return $datos;

    }

    public static function searchAllByIdDB($id)
    {
        $database = medoo::getInstance();
        $database->openConnection(MYSQL_CONFIG);
        $datos = $database->select('usuarios', '*', ["id_usuario[=]" => $id]);
        $database->closeConnection();
        return $datos;
    }

    public static function recuperarFoto($id)
    {
        $database = medoo::getInstance();
        $database->openConnection(MYSQL_CONFIG);
        $datos = $database->select('usuarios', 'foto', ["id_usuario[=]" => $id]);
        $database->closeConnection();
        return $datos;
    }

    public static function modifyDB($data, $id)
    {
        $database = medoo::getInstance();
        $database->openConnection(MYSQL_CONFIG);
        $datos = $database->update('usuarios', $data, ['id_usuario' => $id]);
        $database->closeConnection();
        return $datos;
    }



    public static function searchIdDB($usuario)
    {

        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->select('usuarios', 'id_usuario', ["usuario[=]" => $usuario]);

        $database->closeConnection();

        return $datos[0];

    }

    public static function insertDB($data)

    {

        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->insert('usuarios', [

            "nombre" => $data['nombre'],

            "usuario" => $data['usuario'],

            "fecha_nac" => $data['fecha_nac'],

            "apellidos" => $data['apellidos'],

            "clave" => $data['clave']

        ]);

        $database->closeConnection();

        return $datos;

    }
/*
    public static function insertDB($data)

    {

        $database = medoo::getInstance();

        $database->openConnection(MYSQL_CONFIG);

        $datos = $database->insert('usuarios', $data);

        $database->closeConnection();

        return $datos;

    }*/

}
