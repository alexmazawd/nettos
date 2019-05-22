<?php



class mdlLogin extends Singleton
{
    const PAGE = 'login';

    public function onGestionPagina()
    {

        if (getGet('pagina') != self::PAGE) return;

        // Validamos

        $val = Validacion::getInstance();

        // Validamos los elementos que hay en $_POST

        $toValidate = ($_POST);

        $rules = array(
            'usuario' => 'required|number_alpha|user_no_exists',

            'clave' => 'required|number_alpha',

            'log' => ''

            //Validacion, campos usuario y clave requeridos y pueden contener numeros y letras

            //user_no_exists rule que genera el error en caso de que el usuario con el que se intenta iniciar sesion no existe

        );


        if (!is_null(getPost(self::PAGE))) {  //una vez que se envia el formulario se entra en este if

            $usuario = getPost('usuario');

            $clave = getPost('clave');

            $_SESSION['info'] = 'nologged';

            $datos = usuarios::searchUsuarioDB($usuario); //se recupera el hash con el que se hace la comprobacion de la clave

            if ($datos) { //si $datos estuviera vacio significaria que el usuario no existe o no tiene clave

                /*   $message = "wrong answer";
                   echo "<script type='text/javascript'>alert('$message');</script>";*/

                if (!password_verify($clave, $datos)) { //comprueba que la clave no sea incorrecta, de ser asi genera el error

                    $val->setNoExists(true);

                }else{ //si entra en este else, es que la clave esta bien

                    $_SESSION['info'] = 'logged';

                    //iguala info a logged, que es la variable con la que comprobaremos en el resto de paginas si esta o no iniciada la sesion

                    if (isset($_POST['log'])) { //si el usuario ha marcado la checkbox de mantener sesion iniciada

                        $id = usuarios::searchIdDB($usuario);

                        setcookie('logged', $id, time()+1800); //se crea una cookie que ademas de usarse para comprobar si la sesion ya esta iniciada

                        //contendra el id del usuario que es lo que usaremos para recuperar sus datos en otras paginas del sitio

                    }else{ //si el usuario no quiere mantener la session iniciada se creara una cookie que se eliminara al cerrar el navegador

                        $id = usuarios::searchIdDB($usuario);

                        setcookie('logged', $id, 0); //se crea una cookie que ademas de usarse para comprobar si la sesion ya esta iniciada

                        //contendra el id del usuario que es lo que usaremos para recuperar sus datos en otras paginas del sitio

                    }

                }


            }else{ //el usuario no existe

                $val->setNoExists(true);
            }


            $val->addRules($rules); //se agregan las rules a validacion
            $val->run($toValidate); //se comprueban

            if ($val->isValid()) { //entrar en este if significa que no hay ningun tipo de error y que todo esta bien asi que se redirige
                $_SESSION[self::PAGE] = $val->getOks();
                redirectTo('?pagina=inicio');
            }
        }else{ //en este else se entrara la primera vez que entremos en login, comprobara si la cookie logged existe y de ser asi te envia automaticamente al inicio

            if (isset($_COOKIE['logged'])){
                redirectTo('?pagina=inicio');
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

        echo loginParser::loadContent($vista);
    }
}
