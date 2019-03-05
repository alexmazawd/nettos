<?php
/**
 * Copyright (C) Alejandro 2018
 *
 *
 *
 * This program is free software: you can redistribute it and/or modify
 *
 * it under the terms of the GNU General Public License as published by
 *
 * the Free Software Foundation, either version 3 of the License, or
 *
 * (at your option) any later version.
 *
 *
 *
 * This program is distributed in the hope that it will be useful,
 *
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 *
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *
 * GNU General Public License for more details.
 *
 *
 *
 * You should have received a copy of the GNU General Public License
 *
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 */

class Session {
    /**
     * startSession: Gestiona el inicio de sesion.
     */
    public static function startSession() {
// Retorna null si las sesiones no están habilitadas o hay una sesión iniciada
        if (session_status() != PHP_SESSION_NONE)
            return;
        session_start();
    }
    /**
     * closeSession: Gestiona el cerrado y borrado de los datos de la sesión del navegador
     */
    public static function closeSession() {
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), "", time() - 3600, "/");
        }
        session_unset();
        session_destroy();
    }
    /**
     * get: Devuelve el valor o en su defecto el valor que quiera el usuario si no existe
     *
     * @param $index
     * @param null $else
     * @return null
     */
    public static function get($index, $else = null) {
        return (isset($_SESSION[$index])) ? $_SESSION[$index] : $else;
    }
    /**
     * del: Elimina un elemento de $_SESSION
     *
     * @param $index
     */
    public static function del($index) {
        if (array_key_exists($index, $_SESSION)) unset($_SESSION[$index]);
    }
}