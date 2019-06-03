<?php

class mdlPerfil extends Singleton
{
    const PAGE = 'perfil';

    public function onGestionPagina()
    {
        if (getGet('pagina') != self::PAGE) return;

        if (!isset($_COOKIE['logged'])) {
            // Cambiamos el paso
            redirectTo('index.php?pagina=login');
        }

        if(!is_null(getPost('busqueda'))){

            setcookie('busqueda',getPost('nombre'), 0);

            redirectTo('index.php?pagina=busqueda');

        }

        setcookie('idPerfil','', time()-36000);

        if (isset($_FILES['imgNett'])) {

            if ($_FILES['imgNett']['name'] != '') {

                $nombre = $_FILES['imgNett']['name'];

                $tmp = $_FILES['imgNett']['tmp_name'];

                $destino = 'images';

                //Movera el archivo del folder temporal a una nueva ruta

                move_uploaded_file($tmp, $destino . '/' . $nombre);

                //se hace un if para comprobar que se ha insertado una imagen, de lo contrario se produciria un error en la logica del programa

            }

        }

        if (isset($_GET['id'])){

            setcookie('idPerfil', getGet('id'), 0);

        }

    }

    public function onCargarVista($path)
    {
        if (getGet('pagina') != self::PAGE) return;

        ob_start();

        include $path;

        $vista = ob_get_contents();

        ob_end_clean();

        echo $vista;
    }
}
