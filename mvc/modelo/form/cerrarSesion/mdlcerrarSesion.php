<?php

class mdlcerrarSesion extends Singleton {

    const PAGE='cerrarSesion';

public function onGestionPagina()
{
    if (getGet('pagina') != self::PAGE) return;

    if (!isset($_COOKIE['logged'])) {
        // Cambiamos el paso
        redirectTo('index.php?pagina=login');
    } else {

        setcookie('logged','',time()-315360000);
        redirectTo('index.php?pagina=login');

    }
}
}