<?php $val = Validacion::getInstance(); ?>
<html>
<head>
    <meta charset="UTF-8">
    <title>GESTION DE LA BASE DE DATOS DE USUARIOS</title>
    <style>
        form {
            padding-top: 50px;
        }
        .has-error { background: red; color: white; padding: 0.2em; }
        .has-warning { background: blue; color: white; padding: 0.2em; }
    </style>
</head>
<body>
<div class="container">
    <form action="index.php?pagina=edicion" method="post" enctype="multipart/form-data">

        {{errores}}

        <div>
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
            <label class=" {{class-bio}}" for="bio">Hablanos un poco sobre ti</label>
            <textarea id="bio" name="bio"><?php echo ($val->restoreValue('bio') ? $val->restoreValue('bio') : '') ?></textarea>
            <span>{{war-bio}}</span>
            <br>
            <br>
            <label class=" {{class-foto}}" for="foto">Imagen de perfil</label>
            <input type="file" id="foto" name="foto">
            <span>{{war-foto}}</span>

            <br>

            <button type="submit" name="edicion">Modificar</i></button>

        </div>
    </form>
</div>
<br>
<a href="mvc/vista/inicio.html">Volver a Inicio</a>
</body>
</html>
