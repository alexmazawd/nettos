<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Notificaciones - Nettos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/line-awesome.css">

    <link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

          <script defer src="js/cargarNotificaciones.js"></script>

</head>


<body>


<div class="wrapper">



    <header>
        <div class="container">
            <div class="header-data">
                <div class="logo">
                    <a href="?pagina=inicio" title=""><img class="reduccion" src="images/logo_principal_blanco.png" alt="Logotipo de la empresa"></a>
                </div>
                <!--logo end-->
                <div class="search-bar">

                    <!--inicio barra busqueda-->

                    <form action="index.php?pagina=notificaciones" method="post">
                        <input type="text" required="required" id="nombre" name="nombre" placeholder="Buscar...">
                        <button type="submit" id="busqueda" name="busqueda"><i class="fa fa-search"></i></button>
                    </form>

                    <!--final de barra busqueda-->

                </div>

                <nav>
                    <ul>
                        <li>
                            <a href="?pagina=inicio" title="">
                                <span><i class="fas fa-home"></i></span>
                                Inicio
                            </a>
                        </li>
                        <li>
                            <a href="?pagina=notificaciones" title="">
                                <span><i class="fas fa-bullhorn"></i></span>
                                Notificaciones
                            </a>
                        </li>
                        <li>
                            <a href="?pagina=perfil" title="">
                                <span><i class="fas fa-user"></i></span>
                                Perfil
                            </a>
                            <ul>
                                <li><a href="?pagina=perfil" title="">Perfil</a></li>
                                <li><a href="?pagina=edicion" title="">Editar perfil</a></li>
                                <li><a href="?pagina=cerrarSesion" title="">Cerrar sesion</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!--nav vista movil-->
                <div class="menu-btn espaciado">
                    <a href="#" title=""><i class="fa fa-bars"></i></a>
                </div>

            </div>

        </div>
    </header>
    <!--header fin-->


    <section class="profile-account-setting">
        <div class="container">
                <div class="row">

                    <div class="col-lg-2"></div>

                    <div class="col-lg-8">

                            <!--Notificaciones-->

                            <div class="espaciado_Setting" id="nav-notification" role="tabpanel" aria-labelledby="nav-notification-tab">
                                    <div class="acc-setting">
                                        <h3>Nuevos seguidores</h3>
                                        <div class="notifications-list" id="cuadroSeguidores">

                                        </div>
                                    </div>
                                </div>

                    </div>
                    <div class="col-lg-2"></div>

                    <!--Futura implementación Favoritos-->

                        <!--<div class="col-lg-6">

                            <div class="espaciado_Setting" id="nav-notification" role="tabpanel" aria-labelledby="nav-notification-tab">
                                <div class="acc-setting">
                                    <h3>Nuevos Favs</h3>
                                    <div class="notifications-list" id="cuadroFavs">

                                    </div>
                                </div>
                            </div>


                        </div>-->





                    </div>





                </div>




        </div>


    </section>



    <!--FOOTER-->

    <footer>
        <div class="footy-sec mn no-margin">
            <div class="container">
                <ul>
                    <li><a href="#" onclick="window.open('?pagina=politicas', 'Terminos y Licencia','width=1200,height=750')" title="Sobre Nosotros">Sobre Nosotros</a></li>
                    <li><a href="#" onclick="window.open('?pagina=politicas', 'Terminos y Licencia','width=1200,height=750')" title="Política de datos">Política de datos</a></li>
                    <li><a href="#" onclick="window.open('?pagina=politicas', 'Terminos y Licencia','width=1200,height=750')" title="Política de cookies">Política de cookies</a></li>
                    <li><a href="#" onclick="window.open('?pagina=politicas', 'Terminos y Licencia','width=1200,height=750')" title="Copyright">Copyright</a></li>
                    <li><a href="#" onclick="window.open('?pagina=politicas', 'Terminos y Licencia','width=1200,height=750')" title="Mapa Web">Mapa Web</a></li>
                </ul>
                <p><img class="reduccionPerfil" src="images/logo_principal.png" alt="Logo de la empresa">Nettos © 2019</p>

            </div>
        </div>
    </footer>
    <!--FIN FOOTER-->

</div><!--theme-layout end-->
</body>



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="js/script.js"></script>
