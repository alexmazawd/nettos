<?php



class mdlInicio extends Singleton
{
    const PAGE = 'inicio';

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
