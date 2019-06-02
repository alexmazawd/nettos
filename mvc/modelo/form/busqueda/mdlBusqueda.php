<?php



class mdlBusqueda extends Singleton
{
    const PAGE = 'busqueda';

    public function onGestionPagina()
    {
        if (getGet('pagina') != self::PAGE) return;

        if (!isset($_COOKIE['logged'])) {
            // Cambiamos el paso
            redirectTo('index.php?pagina=login');
        }

        setcookie('search','', time()-36000);

        if (isset($_POST['search'])){

            setcookie('search', getPost('search'), 0);
        }

        redirectTo('index.php?pagina=busqueda');
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