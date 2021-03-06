<?php



class mdlExitoso extends Singleton
{
    const PAGE = 'exitoso';

    public function onGestionPagina()
    {
        if (getGet('pagina') != self::PAGE) return;

        if (!isset($_COOKIE['logged'])) {
            // Cambiamos el paso
            redirectTo('index.php?pagina=login');
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
