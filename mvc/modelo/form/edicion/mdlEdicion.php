<?php

class mdlEdicion extends Singleton
{
    const PAGE = 'edicion';

    public function onGestionPagina()
    {
        if (getGet('pagina') != self::PAGE) return;

        $id = $_COOKIE['logged']; //Inicializo una variable con el valor de id del usuario

        if(!is_null(getPost('busqueda'))){

            setcookie('busqueda',getPost('nombre'), 0);

            redirectTo('index.php?pagina=busqueda');

        }

        if (is_null(getPost('edicion'))) { //En este if se entra cuando el usuario no ha enviado el form por primera vez y es el donde se recuperan los datos

            $datos = usuarios::searchAllByIdDB($id); //rescato los datos del usuario para autocompletar el formulario

            if (count($datos) > 0) { //si devuelve algo se entra al form y se recuperan y colocan los datos

// Utilizamos la validación para rellenar los campos del formulario.

                $val = Validacion::getInstance();

                $toValidate = $datos[0];

                $rules = array( //se hace uso de las rules para la recuperacion de datos
                    'nombre' => 'required|alpha_space',
                    'apellidos' => 'required|alpha_space',
                    'fecha_nac' => 'required',
                    'bio' => '',
                    'foto' => ''
                );

                $val->addRules($rules);

                $val->run($toValidate);

            } else // si no se recuperara ningun dato, significaria que el usuario no existe y se ha entrado a edicion sin tener una sesion iniciada

                redirectTo('index.php'); //se redirige a cualquier otra parte

        } else { //en este else se entra al enviar el formulario, se validan todos los campos

            // Validamos
            $val = Validacion::getInstance();
            $toValidate = $_POST;
            $rules = array(
                'nombre' => 'required|alpha_space',
                'apellidos' => 'required|alpha_space',
                'fecha_nac' => 'required',
                'bio' => '',
                'foto' => ''
            );

            $val->addRules($rules);

            $val->run($toValidate);

            // Guardamos los datos en la sesión

            if ($val->isValid()) { //si esta todo valido se almacenan los nuevos datos

                $_SESSION[self::PAGE] = $val->getOks();

                if ($val->isValid()) { //si esta todo valido se almacenan los nuevos datos

                    $_SESSION[self::PAGE] = $val->getOks();

                    if ($_FILES['foto']['name']!=''){

                        $nombre = $_FILES['foto']['name'];

                        $tmp = $_FILES['foto']['tmp_name'];

                        $destino = 'images';

                        //Movera el archivo del folder temporal a una nueva ruta

                        move_uploaded_file($tmp, $destino .'/'.$nombre);

                        copy($tmp, $destino);

                        //se hace un if para comprobar que se ha insertado una imagen, de lo contrario se produciria un error en la logica del programa

                        $_SESSION[self::PAGE]['foto']= $_FILES['foto']['name']; //se almacena el nombre de la imagen

                    }else{ //si no se ha insertado nada simplemente se destruye la variable foto

                        unset($_SESSION[self::PAGE]['foto']);

                    }


// Guardamos en el array $data los datos de $_SESSION['edicion'] que sólo contiene el nombre pero el método Usuario::modifyDB espera un array

                $data = $_SESSION['edicion'];

                $datos = usuarios::modifyDB($data, $id); //se llama a la funcion que modifica

                if ($datos) {

                    $_SESSION['mod'] = true;

                    redirectTo('index.php?pagina=perfil');

                } else {

                    $_SESSION['mod'] = false;

                    redirectTo('index.php?pagina=perfil');


                }
            }
        }
    }
    }

    public function onCargarVista($path)
    {
        if (getGet('pagina') != self::PAGE) return;
        ob_start();
        include $path;
        $vista = ob_get_contents();
        ob_end_clean();
        echo EdicionParser::loadContent($vista);
    }
}
