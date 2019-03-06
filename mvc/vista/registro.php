<?php $val = Validacion::getInstance();
/**
 * Created by PhpStorm.
 * User: Daw2
 * Date: 15/01/2019
 * Time: 9:49
 */
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Alta de usuarios</title>
    <script src="js/validacion.js"></script>
    <style>
        form {
            padding-top: 50px;
        }
        .has-error { background: red; color: white; padding: 0.2em; }
        .has-warning { background: blue; color: white; padding: 0.2em; }
    </style>
</head>
<body>
<div>
    <form action="index.php?pagina=registro" method="post">
        <h1>ALTA DE USUARIOS</h1>
        {{errores}}
        <div>
            <label class=" {{class-usuario}}" for="usuario">Nombre de usuario</label>
            <input type="text" id="usuario" name="usuario"
                   value='<?php echo $val->restoreValue('usuario'); ?>' oninput="validarUser()" >
            <span>{{war-usuario}}</span>
            <br>
            <br>
            <label class=" {{class-clave}}" for="clave">Clave</label>
            <input type="text" id="clave" name="clave"
                   value='<?php echo $val->restoreValue('clave'); ?>' >
            <span>{{war-clave}}</span>
            <br>
            <br>
            <label class=" {{class-clave2}}" for="clave2">Confirmar Clave</label>
            <input type="text" id="clave2" name="clave2"
                   value='<?php echo $val->restoreValue('clave2'); ?>' >
            <span>{{war-clave2}}</span>
            <br>
            <br>
            <label class=" {{class-nombre}}" for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre"
                   value='<?php echo $val->restoreValue('nombre'); ?>' >
            <span>{{war-nombre}}</span>
            <br>
            <br>
            <label class=" {{class-apellidos}}" for="apellidos">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos"
                   value='<?php echo $val->restoreValue('apellidos'); ?>' >
            <span>{{war-apellidos}}</span>
            <br>
            <br>
            <label class=" {{class-fecha_nac}}" for="fecha_nac">Fecha de nacimiento</label>
            <input type="date" id="fecha_nac" name="fecha_nac"
                   value='<?php echo $val->restoreValue('fecha_nac'); ?>' >
            <span>{{war-fecha_nac}}</span>
            <br>
            <br>
            <label class=" {{class-codigo}}" for="codigo">Codigo de invitacion</label>
            <input type="text" id="codigo" name="codigo"
                   value='<?php echo $val->restoreValue('codigo');?>'>
            <span>{{war-codigo}}</span>
            <br>

        </div>
        <br>
        <div>
            <button type="submit" name="registro">Registrarse</button>
            <button type="button" onclick="location.href='index.php';">Volver al Login</button>
        </div>
    </form>
</div>
</body>
</html>
