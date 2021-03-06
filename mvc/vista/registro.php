<?php $val = Validacion::getInstance(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro - Nettos</title>
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

</head>
<body>
<div>


<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="images/logo_principal.png" alt="IMG">
            </div>

            <form class="login100-form validate-form" action="index.php?pagina=registro" method="post" >
					<span class="login100-form-title">
						Unete a Nettos
					</span>
                <br><br>
                {{errores}}

                <div class="wrap-input100 validate-input">
                    <input class="input100"
                           type="text"
                           id="usuario"
                           name="usuario"
                           required="required"
                           placeholder="Nombre de Usuario" value='<?php echo $val->restoreValue('usuario'); ?>' oninput="validarUser()" >
                    <span class="focus-input100"></span>
                    <span>{{war-usuario}}</span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100"
                           type="password"
                           id="clave"
                           name="clave"
                           required="required"
                           minlength="7"
                           placeholder="Clave" value='<?php echo $val->restoreValue('clave'); ?>'>
                    <span class="focus-input100"></span>
                    <span>{{war-clave}}</span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input class="input100"
                           type="password"
                           id="clave2"
                           name="clave2"
                           minlength="7"
                           required="required"
                           placeholder="Confirmar Clave" value='<?php echo $val->restoreValue('clave2'); ?>'>
                    <span class="focus-input100"></span>
                    <span>{{war-clave2}}</span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100"
                           type="text"
                           id="nombre"
                           name="nombre"
                           required="required"
                           pattern="^[a-zA-ZÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ]\s?[a-zA-ZÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\s]+$"
                           oninvalid="this.setCustomValidity('El formato es erroneo, introduzca el nombre. Ej: Luis Mariano ó Mariano');"
                           oninput="this.setCustomValidity('')"
                           placeholder="Nombre" value='<?php echo $val->restoreValue('nombre'); ?>'>
                    <span class="focus-input100"></span>
                    <span>{{war-nombre}}</span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100"
                           type="text"
                           id="apellidos"
                           name="apellidos"
                           required="required"
                           pattern="^[a-zA-ZÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ]\s?[a-zA-ZÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\s]+$"
                           oninvalid="this.setCustomValidity('El formato es erroneo, introduzca los apellidos. Ej: López García');"
                           oninput="this.setCustomValidity('')"
                           placeholder="Apellidos" value='<?php echo $val->restoreValue('apellidos'); ?>'>
                    <span class="focus-input100"></span>
                    <span>{{war-apellidos}}</span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100"
                           type="date"
                           id="fecha_nac"
                           name="fecha_nac"
                           required="required"
                           placeholder="fecha de nacimiento"  value='<?php echo $val->restoreValue('fecha_nac'); ?>'>
                    <span class="focus-input100"></span>
                    <span>{{war-fecha_nac}}</span>
                </div>


                <div class="wrap-input100 validate-input">
                    <input class="input100"
                           type="text"
                           id="codigo"
                           name="codigo"
                           required="required"
                           placeholder="Codigo de Invitación" value='<?php echo $val->restoreValue('codigo');?>'>
                    <span class="focus-input100"></span>
                    <span>{{war-codigo}}</span>
                </div>


                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" name="registro">
                        Registrarse
                    </button>
                </div>


            </form>
            <div class="container-login100-form-btn">
                <button class="registro100-form-btn" onclick="location.href='index.php';">
                    Volver al login
                </button>
            </div>
        </div>
    </div>
</div>

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

</div>

</body>
</html>
