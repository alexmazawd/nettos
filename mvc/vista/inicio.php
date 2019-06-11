<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Inicio - Nettos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
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

</head>
<body>
<div class="wrapper">

    <!-- Se añade js para crear el nett -->
    <script async src="js/insertaNett.js"></script>
    <!-- Se añade js para sacar datos del usuario -->
    <script defer src="js/datosUserInicio.js"></script>
    <!-- Se añade js para sacar datos del usuario -->
    <script defer src="js/cargaNettsSiguiendo.js"></script>
    <!-- Se añade js para dar o quitar fav -->
    <script async src="js/darQuitarFav.js"></script>

    <!--INICIO DEL HEADER-->
    <header>
        <div class="container">
            <div class="header-data">
                <div class="logo">
                    <a href="?pagina=inicio" title=""><img class="reduccion" src="images/logo_principal_blanco.png"
                                                           alt="Logotipo de la empresa"></a>
                </div>
                <!--logo end-->
                <div class="search-bar">

                    <!--inicio barra busqueda-->
                    <form action="index.php?pagina=inicio" method="post">
                        <input type="text" id="nombre" name="nombre" placeholder="Buscar...">
                        <button type="submit" id="busqueda" name="busqueda"><i class="fa fa-search"></i></button>
                    </form>

                    <!--final de barra busqueda-->


                </div>
                <!--search-bar end-->
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


            </div>

            <div class="menu-btn espaciado">
                <a href="#" title=""><i class="fa fa-bars"></i></a>
            </div><!--menu-btn end-->
        </div>
    </header>
    <!--FIN DEL HEADER-->

    <!--INICIO DEL MAIN-->
    <main>
        <div class="main-section">
            <div class="container">
                <div class="main-section-data">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 pd-left-none no-pd">
                            <div class="main-left-sidebar no-margin">
                                <div class="user-data full-width">
                                    <div class="user-profile">
                                        <div class="username-dt">
                                            <div class="usr-pic">
                                                <img id="imgPrincipal" src="" alt="Foto de perfil del usuario">
                                            </div>
                                        </div>
                                        <!--username-dt end-->


                                        <div class="user-specs">
                                            <h3 id="nUsuario"></h3>
                                            <span id="userNa"></span><br><br>
                                            <span id="descripcion"></span>
                                        </div>
                                    </div>
                                    <!--user-profile end-->
                                    <ul class="user-fw-status">
                                        <li>
                                            <h4>Netts</h4>
                                            <span id="nNetts">1</span>
                                        </li>
                                        <li>
                                            <h4>SEGUIENDO</h4>
                                            <span id="nSiguiendo">1</span>
                                        </li>
                                        <li>
                                            <h4>SEGUIDORES</h4>
                                            <span id="nSeguidores">1</span>
                                        </li>

                                    </ul>
                                </div>
                                <!--user-data end-->


                            </div>
                            <!--main-left-sidebar end-->
                        </div>
                        <div class="col-lg-6 col-md-8 no-pd">
                            <div class="main-ws-sec">
                                <div class="post-topbar">
                                    <div class="user-picy">
                                        <img id="imgSecundaria" src="" alt="Foto de perfil del usuario">
                                    </div>
                                    <div class="post-st">
                                        <ul>
                                            <li><a class="post-jb active" href="#" title="">Publicar Nett</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--post-topbar end-->

                                <!--INICIO DE SECCION PARA PONER LOS NETTS-->
                                <div class="posts-section" id="seccionNetts">
                                </div>
                                <!--FINAL DE SECCION PARA PONER LOS NETTS-->


                            </div>
                        </div>
                        <div class="col-lg-3 pd-right-none no-pd">
                            <div class="right-sidebar">

                                <div class="widget widget-about">
                                    <img class="reduccion" src="images/logo_principal.png" alt="Logo de la empresa">
                                    <h3>Bienvenido a Nettos</h3>
                                    <span>Esta RRSS esta especialemente pensada para ti!</span>
                                    <div class="sign_link">
                                        <h3><a href="?pagina=cerrarSesion" title="">Cerrar sesión</a></h3>
                                    </div>
                                </div>
                                <!--widget-about end-->

                                <!--FOOTER-->

                                <div class="tags-sec full-width">

                                    <ul>
                                        <li><a href="#"
                                               onclick="window.open('?pagina=politicas', 'Terminos y Licencia','width=1200,height=750')"
                                               title="Sobre Nosotros">Sobre Nosotros</a></li>
                                        <li><a href="#"
                                               onclick="window.open('?pagina=politicas', 'Terminos y Licencia','width=1200,height=750')"
                                               title="Política de datos">Política de datos</a></li>
                                        <li><a href="#"
                                               onclick="window.open('?pagina=politicas', 'Terminos y Licencia','width=1200,height=750')"
                                               title="Política de cookies">Política de cookies</a></li>
                                        <li><a href="#"
                                               onclick="window.open('?pagina=politicas', 'Terminos y Licencia','width=1200,height=750')"
                                               title="Copyright">Copyright</a></li>
                                        <li><a href="#"
                                               onclick="window.open('?pagina=politicas', 'Terminos y Licencia','width=1200,height=750')"
                                               title="Mapa Web">Mapa Web</a></li>
                                    </ul>

                                    <div class="cp-sec">
                                        <img class="reduccionfooter" src="images/logo_principal.png"
                                             alt="Logotipo de la empresa">
                                        <p class="copy">Nettos © 2019</p>
                                    </div>
                                </div>
                                <!--tags-sec end-->

                                <!--FIN FOOTER-->


                            </div>
                            <!--right-sidebar end-->
                        </div>


                    </div>
                </div><!-- main-section-data end-->
            </div>
        </div>
    </main>

    <div class="post-popup job_post">
        <div class="post-project">
            <h3>Publicando un Nett..</h3>
            <div class="post-project-fields">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12">
                            <textarea name="nett" id="nett" placeholder="Cuentanos que estas pensando!"></textarea>
                        </div>
                        <div class="col-lg-6">
                            <input type="file" id="imgNett" name="imgNett" placeholder="Introduce una imagen"
                                   title="Subir archivos">
                        </div>
                        <div class="col-lg-12">
                            <ul>
                                <li>
                                    <button class="active" type="submit" value="post" onclick="peticionAJAX()">Publicar
                                        Nett
                                    </button>
                                </li>
                                <li><a href="" title="">Cancelar</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <!--post-project-fields end-->
            <a href="" title=""><i class="la la-times-circle-o"></i></a>
        </div>
        <!--post-project end-->
    </div>
    <!--post-project-popup end-->


</div>
<!--theme-layout end-->


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="js/scrollbar.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>
