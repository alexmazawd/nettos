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
 * primero los ficheros de libs, pues los otros ficheros tienen dependencias respecto a las funciones
 * contenidas en libs
 *La clase RecursiveDirectoryIterator proporciona una interfaz para iterar recursivamente directorios del
 * sistema de ficheros.
 */
$Directory = new RecursiveDirectoryIterator(dirname(__FILE__) . '/libs/'); // dirname(__FILE__) es lo mismo que __DIR__

//La clase RecursiveIteratorIterator se puede usar para recorrer iteradores recursivos.

$Iterator = new RecursiveIteratorIterator($Directory);

//La clase RegexIterator se puede usar para filtrar otro iterador basado en una expresión regular

// RecursiveRegexIterator::GET_MATCH devuelve todas las coincidencias

$Regex = new RegexIterator($Iterator, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH);

//El objeto $Regex puede ser recorrido como un array cuyos elementos son los paths completos de los

// ficheros. Los índices también son los paths completos.

foreach ($Regex as $key => $item)

    require_once $key;
/**

 * require_once recursivo de los archivos de la pagina

 */

$Directory = new RecursiveDirectoryIterator(dirname(__FILE__));

$Iterator = new RecursiveIteratorIterator($Directory);

$Regex = new RegexIterator($Iterator, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH);

foreach ($Regex as $key => $item)

    if (!contains('index', $key) && !contains('include', $key) && !contains('vista', $key))

        require_once $key;

