<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Perfil - Nettos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/line-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <!-- Se añade js para crear el nett -->
    <script async src="js/insertaNett.js"></script>
    <!-- Se añade js para cargar netts del usuario -->
    <script defer src="js/cargaNettsuser.js"></script>
    <!-- Se añade js para sacar datos del usuario -->
    <script defer src="js/datosUserInicio.js"></script>


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
                        <form action="index.php?pagina=busqueda">
                            <input type="text" name="search" placeholder="Buscar...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
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
                    <!--nav end-->
                    <div class="menu-btn espaciado">
                        <a href="#" title=""><i class="fa fa-bars"></i></a>
                    </div>
                    <!--menu-btn end-->
                </div>
                <!--header-data end-->
            </div>
        </header>
        <!--header end-->


        <section class="fotoPerfil">

        </section>


        <main>
            <div class="main-section">
                <div class="container">
                    <div class="main-section-data">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="main-left-sidebar">
                                    <div class="user_profile">
                                        <div class="user-pro-img">
                                            <img id="imgPrincipal" src="" alt="Foto de perfil del usuario">
                                        </div>

                                        <!--user-pro-img end-->
                                        <div class="user_pro_status">

                                            <ul class="flw-hr" id="contBtnSeguir">
                                                <li>
                                                    <a href="#" title="" class="flww">
                                                        <i class="la la-plus" id="simbSeguir"></i>
                                                        <span id="txtSeguir">Seguir</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <span id="userNa">@sagitario</span><br><br>
                                            <ul class="flw-status">
                                                <li>
                                                    <span>Siguiendo</span>
                                                    <b id="nSiguiendo"></b>
                                                </li>
                                                <li>
                                                    <span>Seguidores</span>
                                                    <b id="nSeguidores"></b>
                                                </li>
                                                <li>
                                                    <span>Netts</span>
                                                    <b id="nNetts"></b>
                                                </li>

                                                <li>
                                                    <span>MG</span>
                                                    <b id="nMgs"></b>
                                                </li>

                                            </ul>


                                        </div>
                                        <!--user_pro_status end-->


                                    </div>
                                    <!--user_profile end-->
                                </div>
                                <!--main-left-sidebar end-->
                            </div>
                            <div class="col-lg-6">
                                <div class="main-ws-sec">
                                    <div class="user-tab-sec">
                                        <h3 id="nUsuario"></h3>
                                        <div>
                                            <span id="descripcion"></span>
                                        </div>
                                        <br><br>
                                        <div class="post-topbar" id="publicarNett">
                                            <div class="user-picy">
                                                <img id="imgSecundaria" src="" alt="Foto de perfil del usuario">
                                            </div>
                                            <div class="post-st">
                                                <ul>
                                                    <li><a class="post-jb active" href="#" title="">Publicar Nett</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--user-tab-sec end-->
                                    <div class="product-feed-tab current" id="feed-dd">
                                        <div class="posts-section" id="seccionNetts"></div>
                                <!--main-ws-sec end-->
                                    </div>
                                  </div>
                            </div>
                            <div class="col-lg-3">
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
                                            <li><a href="#" onclick="window.open('?pagina=politicas', 'Terminos y Licencia','width=1200,height=750')" title="Sobre Nosotros">Sobre Nosotros</a></li>
                                            <li><a href="#" onclick="window.open('?pagina=politicas', 'Terminos y Licencia','width=1200,height=750')" title="Política de datos">Política de datos</a></li>
                                            <li><a href="#" onclick="window.open('?pagina=politicas', 'Terminos y Licencia','width=1200,height=750')" title="Política de cookies">Política de cookies</a></li>
                                            <li><a href="#" onclick="window.open('?pagina=politicas', 'Terminos y Licencia','width=1200,height=750')" title="Copyright">Copyright</a></li>
                                            <li><a href="#" onclick="window.open('?pagina=politicas', 'Terminos y Licencia','width=1200,height=750')" title="Mapa Web">Mapa Web</a></li>
                                        </ul>

                                        <div class="cp-sec">
                                            <img class="reduccionfooter" src="images/logo_principal.png" alt="Logotipo de la empresa">
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
                                <textarea name="nett" id="nett" maxlength="140" placeholder="Cuentanos que estas pensando!"></textarea>
                            </div>
                            <div class="col-lg-6">
                                    <input type="file" id="imgNett" name="imgNett" placeholder="Introduce una imagen" title="Subir archivos">
                                </div>
                            <div class="col-lg-12">
                                <ul>
                                    <li><button class="active" type="submit" value="post" onclick="peticionAJAX()">Publicar Nett</button></li>
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
</body>


    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
