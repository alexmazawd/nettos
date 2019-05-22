<?php $val = Validacion::getInstance(); ?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ajustes - Nettos</title>

    <style>
        form {
            padding-top: 50px;
        }
        .has-error { background: red; color: white; padding: 0.2em; }
        .has-warning { background: blue; color: white; padding: 0.2em; }
    </style>

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
                    <form>
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
                                <li><a href="perfil.php" title="">Perfil</a></li>
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


    <section class="profile-account-setting">
        <div class="container">
                <div class="row">
                    <div class="col-lg-2"></div>

                    <div class="col-lg-8">

                            <!--EDITAR PERFIL-->

                            <div class="espaciado_Setting" id="nav-deactivate" role="tabpanel" aria-labelledby="nav-deactivate-tab">
                                <div class="acc-setting">
                                    <h3>Editar perfil</h3>
                                    <form action="index.php?pagina=edicion" method="post" enctype="multipart/form-data">

                                        {{errores}}

                                        <div class="cp-field">
                                            <h5>Nombre</h5>
                                            <div class="cpp-fiel">
                                                <input type="text"
                                                       name="nombre"
                                                       id="nombre"
                                                       placeholder="Nombre"
                                                       value='<?php echo $val->restoreValue('nombre'); ?>'>
                                                <span>{{war-nombre}}</span>
                                                <i class="fas fa-signature"></i>
                                            </div>
                                        </div>
                                        <div class="cp-field">
                                            <h5>Apellidos</h5>
                                            <div class="cpp-fiel">
                                                <input type="text"
                                                       name="apellidos"
                                                       placeholder="Apellidos"
                                                       value='<?php echo $val->restoreValue('apellidos'); ?>' >
                                                <span>{{war-apellidos}}</span>
                                                <i class="fas fa-signature"></i>
                                            </div>
                                        </div>
                                        <div class="cp-field">
                                            <h5>Fecha de nacimiento</h5>
                                            <div class="cpp-fiel">
                                                <input type="date"
                                                       name="fecha_nac"
                                                       placeholder="fecha de nacimiento"
                                                       value='<?php echo $val->restoreValue('fecha_nac'); ?>'>
                                                <span>{{war-fecha_nac}}</span>
                                                <i class="fa fa-birthday-cake"></i>
                                            </div>
                                        </div>
                                        <div class="cp-field">
                                            <h5>Descripción</h5>
                                            <div class="cpp-fiel">
                                                    
                                                <textarea id="bio"
                                                          name="bio">
                                                    <?php echo ($val->restoreValue('bio') ? $val->restoreValue('bio') : '') ?></textarea>
                                                <span>{{war-bio}}</span>
                                                
                                            </div>
                                        </div>

                                        <div class="cp-field">
                                            <h5>Imagen de perfil</h5>
                                            <div class="cpp-fiel">
                                                <input type="file" name="foto" placeholder="Imagen de perfil">
                                                <span>{{war-foto}}</span>
                                                <i class="fas fa-images"></i>
                                            </div>


                                        </div>

                                        <div class="save-stngs pd3">
                                            <ul>
                                                <li><button type="submit" name="edicion" onclick="location.href='mvc/vista/inicio.php';">Modificar</button></li>
                                            </ul>
                                        </div><!--save-stngs end-->
                                    </form>
                                </div><!--acc-setting end-->
                            </div>                       
                    </div>
                    
                </div>
           



        </div>


    </section>



    <footer>
        <div class="footy-sec mn no-margin">
            <div class="container">
                <ul>
                        <li><a href="#" onclick="window.open('mvc/vista/politicas.php', 'Terminos y Licencia','width=1200,height=750')" title="Sobre Nosotros">Sobre Nosotros</a></li>
                        <li><a href="#" onclick="window.open('mvc/vista/politicas.php', 'Terminos y Licencia','width=1200,height=750')" title="Política de datos">Política de datos</a></li>
                        <li><a href="#" onclick="window.open('mvc/vista/politicas.php', 'Terminos y Licencia','width=1200,height=750')" title="Política de cookies">Política de cookies</a></li>
                        <li><a href="#" onclick="window.open('mvc/vista/politicas.php', 'Terminos y Licencia','width=1200,height=750')" title="Copyright">Copyright</a></li>
                        <li><a href="#" onclick="window.open('mvc/vista/politicas.php', 'Terminos y Licencia','width=1200,height=750')" title="Mapa Web">Mapa Web</a></li>
                </ul>
                <p><img class="reduccionPerfil" src="images/logo_principal.png" alt="Logo de la empresa">Nettos © 2019</p>

            </div>
        </div>
    </footer>

</div><!--theme-layout end-->



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="js/script.js"></script>


