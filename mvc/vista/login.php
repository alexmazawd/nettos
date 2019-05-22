<?php $val = Validacion::getInstance(); ?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login - Nettos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">


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


    <!--===============================================================================================-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="js/validacion.js"></script>
    <style>
        form {
            padding-top: 50px;
        }

        .has-error {
            background: red;
            color: white;
            padding: 0.2em;
        }

        .has-warning {
            background: blue;
            color: white;
            padding: 0.2em;
        }

        .hide {

            display: none;

        }

    </style>
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="images/logo_principal.png" alt="IMG">
            </div>

            <form class="login100-form validate-form" action="index.php?pagina=login" method="post">

					<span class="login100-form-title">
						Entra en Nettos
					</span>

                {{errores}}
                <br><br>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" id="usuario" name="usuario" placeholder="Usuario" value='<?php echo $val->restoreValue('usuario'); ?>'>
                    <span id="usuarioSpan">{{war-usuario}}</span>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="password" id="clave" name="clave" placeholder="Contraseña" value='<?php echo $val->restoreValue('clave'); ?>'>
                    <span>{{war-clave}}</span>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" id="enviarForm" name="login" class="login100-form-btn">
                        Login
                    </button>
                </div>
                <br><br><br>



            </form>
            <div class="container-login100-form-btn">
                <button type="submit" class="registro100-form-btn" onclick="location.href='?pagina=registro';">
                    Registro
                </button>
            </div>
        </div>
    </div>
</div>

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




</body>

</html>