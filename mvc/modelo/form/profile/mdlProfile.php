<?php

class mdlProfile extends Singleton
{
    const PAGE = 'profile';

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
