<!DOCTYPE html>
<html>

<head>
    <title>Tecnhology Services</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <script src="js/jquery.js"></script>
</head>

<body>
    <section class="encabezado">
    <nav class="navbar navbar-light navbar-toggleable-lg" style="background-color: whitesmoke;">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span><img src="img/iconoMenu.png" width="46px"></span>
        </button>
        <a class="navbar-brand " href="#index.html">
        <img src="img/logoAnimal.png" width="200"class="d-inline-block align-top" alt="">
        </a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">
            <ul class="navbar-nav" id="">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" width: 50px>Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="servicios.php">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nosotros.php">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                </li>
                <li class="res nav-item ">
                    <a class="nav-link active" href="registrarse.php">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="iniciarSesion.php">Iniciar Sesion</a>
                </li>
            </ul>
        </div>
    </nav>
    </section>
    <br>
    <br>

    <div class="base">
    </div>

    <section class="container">
        <h3 class="titulocontacto">Resgistrarse</h3>
        <p class="lead textocontacto">Favor de llenar los campos para estar registrado y así tener "una agenda para tu mascota"</p>
    </section>
    <section class="container">
        <div class="registroformulario">
            <form action="registrar.php" method="get" name="form">
                <div>
                    <label class="labelformulario" for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" maxlength="20"/>
                </div>
                <div>
                    <label class="labelformulario" for="apaterno">Apellido Paterno:</label>
                    <input type="text" id="apaterno" name="apaterno" maxlength="20"/>
                </div>
                <div>
                    <label class="labelformulario" for="amaterno">Apellido Materno:</label>
                    <input type="text" id="amaterno" name="amaterno" maxlength="20"/>
                </div>
                <div>
                    <label class="labelformulario" for="telefono">Telefono:</label>
                    <input type="number" id="telefono" name="telefono" maxlength="12"/>
                </div>
                <div>
                    <label class="labelformulario" for="email">E-mail:</label>
                    <input type="email" id="email" name="email" maxlength="40"/>
                </div>
                <div>
                    <label class="labelformulario" for="password">Contraseña</label>
                    <input type="password" id="password" name="password" maxlength="20"/>
                </div>
                <div>
                    <label class="labelformulario" for="cpassword">Confirmar Contraseña</label>
                    <input type="password" id="cpassword" name="cpassword" maxlength="20"/>
                </div>
                    <input type="button" value="guardar" id="subir" onClick="guardar()">
            </form>
        </div>
        <div class="imgregistroformulario">
            <img src="img/perro.jpg">
            <br>
            <br>
            <br>
            <br>
        </div>
    </section>
    <br>
    <br>
    <footer>
        <br>
        <p class="derechos"> Derechos reservados a UNIPOLIDGO</p>
        <br>
    </footer>
    <script type="application/javascript" src="js/scripts.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>