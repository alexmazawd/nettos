<?php



class mdlInicio extends Singleton
{
    const PAGE = 'inicio';

    public function onGestionPagina()
    {
        if (getGet('pagina') != self::PAGE) return;

        if (!isset($_COOKIE['logged'])) {
            // Cambiamos el paso
            redirectTo('index.php?pagina=login');
        }
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
