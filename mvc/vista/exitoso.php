<?php $val = Validacion::getInstance(); ?>
<html>
<head>
    <meta charset="UTF-8">
    <title>GESTION DE LA BASE DE DATOS DE USUARIOS</title>
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
<div>
    <form action="index.php?pagina=login" method="post">
        <h1>ALTA DE SOCIOS</h1>
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

</div>

<br>

<button type="submit" id="enviarForm" name="login">Login</i></button>

<br>

<button type="button" onclick="location.href='?pagina=registro';">Registro</i></button>


</form>

</div>

</body>

</html>
