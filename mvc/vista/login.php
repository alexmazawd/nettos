<?php $val = Validacion::getInstance(); ?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login - Nettos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
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
<<<<<<< HEAD
=======
<div>
    <form action="index.php?pagina=login" method="post">
        <h1>ALTA DE USUARIOS</h1>
        {{errores}}

        <label class="{{class-usuario}}" for="usuario">Nombre</label>

        <input type="text" id="usuario" name="usuario"
               value='<?php echo $val->restoreValue('usuario'); ?>'>

        <span id="usuarioSpan">{{war-usuario}}</span>

        <br>

        <br>

        <label class="{{class-clave}}" for="clave">Clave</label>

        <input type="text" id="clave" name="clave"

               value='<?php echo $val->restoreValue('clave'); ?>'>

        <span>{{war-clave}}</span>

        <br>

        <br>

        <label for="log">Mantener sesion iniciada</label>

        <input type="checkbox" id="log" name="log"

               value='<?php echo $val->restoreCheckboxes('log',true); ?>'>

        <br>
>>>>>>> 5fcd20fa1f541d7679a5e01a1be79373e62cfa54

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




</body>

</html>
