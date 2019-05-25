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

        setcookie('idPerfil','', time()-36000);

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
