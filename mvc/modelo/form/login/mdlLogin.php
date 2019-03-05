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

            'clave' => 'required|number_alpha'

        );


        if (!is_null(getPost(self::PAGE))) {

            $usuario = getPost('usuario');

            $clave = getPost('clave');

            $_SESSION['info'] = 'nologged';

            $datos = login::searchUsuarioDB($usuario);

            if ($datos) {

                /*   $message = "wrong answer";
                   echo "<script type='text/javascript'>alert('$message');</script>";*/

                if (!password_verify($clave, $datos)) {

                    $val->setNoExists(true);
                }else{

                    $_SESSION['info'] = 'logged';
                }


            }else{

                $val->setNoExists(true);
            }


            $val->addRules($rules);
            $val->run($toValidate);

            if ($val->isValid()) {

                $_SESSION[self::PAGE] = $val->getOks();

                redirectTo('index.php?pagina=exitoso');
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
