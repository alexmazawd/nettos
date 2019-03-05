<?php
/**
 * Created by PhpStorm.
 * User: Daw2
 * Date: 15/01/2019
 * Time: 9:35
 */


class mdlRegistro extends Singleton
{
    const PAGE = 'registro';

    public function onGestionPagina()

    {
        if (getGet('pagina') != self::PAGE) return;

// Para acceder a está página hay que pasar por login y por tanto $_SESSION['info'] tiene contenido

// Validamos

        $val = Validacion::getInstance();

// Validamos los elementos que hay en $_POST

        $toValidate = ($_POST);

        $rules = array(

            'usuario' => 'required|number_alpha|duplicate',

            'clave' => 'required|number_alpha',

            'clave2' => 'required|claveDiferente',

            'nombre' => 'required|alpha_space',

            'apellidos' => 'required|alpha_space',

            'codigo' => 'required|invitacion'

        );
        $usuario = getPost('usuario');

// Verificamos si existe el usuario

        if (login::duplicateUsuario($usuario)) {

            $val->setExists(true);

        }

        if (getPost('clave') !== getPost('clave2')){

            $val->setClaveDiferente(true);

        }

        $codigoDeInvitacion = getPost('codigo');

        $invitacion = falso_codigo::searchCodigoInvitacionDB($codigoDeInvitacion);

        if (!$invitacion) { //si lo que me devuelve search codigo es null o 0 es por que no existe el codigo asi que pongo la rule a true para crear el error

            $val->setNoExisteInvitacion(true);

        }

        $val->addRules($rules);

        $val->run($toValidate);

        if (!is_null(getPost(self::PAGE))) {

            if ($val->isValid()) {
// Guardamos los datos en session

                $_SESSION[self::PAGE] = $val->getOks();

                $data = $_SESSION['registro'];

                $data['clave'] = encodePassword($data['clave']);

                $datos = login::insertDB($data);

                if ($datos) {

                    $_SESSION['info'] = 'registed';

                    falso_codigo::removeDB($invitacion);

                } else

                    $_SESSION['info'] = 'noRegisted';

                // Cambiamos el paso

                redirectTo('index.php?pagina=registroExitoso');

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

        echo registroParser::loadContent($vista);

    }


}