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

/**
 * LIBRERIA DE FUNCIONES QUE FACILITAN LA PROGRAMACIÓN DEL PROGRAMADOR ;)
 */
/**
 * getPost: Devuelve el post o en su defecto el valor que quiera el usuario si no existe
 */
function getPost($name, $else = null) {
    return (isset($_POST[$name])) ? $_POST[$name] : $else;
}
/**
 * getGet: Devuelve el get o en su defecto el valor que quiera el usuario si no existe
 */
function getGet($name, $else = null) {
    return (isset($_GET[$name])) ? $_GET[$name] : $else;
}
/**
 * getTagsVista: Obtiene todos los campos {{CAMPO}} de una vista
 */
function getTagsVista($vista) {
    preg_match_all('/\{{(.*?)\}}/', $vista, $tags);
    return $tags[1];
}
/**
 * getArray: Devuelve el valor del index del array o en su defecto el valor que quiera el usuario si no existe
 *
 * @param $arr
 * @param $index
 * @param null $else
 * @return null
 */
function getArray($arr, $index, $else = null) {
    return (isset($arr[$index])) ? $arr[$index] : $else;
}
/**
 * getCookie: Devuelve la cookie o en su defecto el valor que quiera el usuario si no existe
 *
 * @param $name
 * @param null $else
 * @return null
 */
function getCookie($name, $else = null) {
    return (isset($_COOKIE[$name])) ? $_COOKIE[$name] : $else;
}
/**
 * addCookie: Añade una cookie y el tiempo de expiración es en dias
 *
 * @param $nombre
 * @param $valor
 * @param $tiempoDias
 * @return bool
 */
function addCookie($nombre, $valor, $tiempoDias) {
    return setcookie($nombre, $valor, time() + ($tiempoDias * 24 * 60 * 60));
}
/** * redirectTo: Redirecciona al cliente a la url indicada * * @param $url */
function redirectTo($url) {
    header ("Location: $url");
    exit;
}
function contains($needle, $haystack) {
    return strpos($haystack, $needle) !== false;
}
function encodePassword($pass) {
    $opciones = [
        'cost' => 14,
    ];
    $passHash = password_hash($pass, PASSWORD_DEFAULT, $opciones);
    return $passHash;
}
