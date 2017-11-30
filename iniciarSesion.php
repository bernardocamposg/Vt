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
    <nav class="navbar navbar-light navbar-toggleable-lg" style="background-color: #f4f4f4;">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span><img src="img/iconoMenu.png" width="46px"></span>
        </button>
        <a class="navbar-brand " href="#index.html">
        <img src="img/logoAnimal.png" width="130"class="d-inline-block align-top" alt="">
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
                    <a class="nav-link" href="registrarse.php">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  active" href="iniciarSesion.php">Iniciar Sesion</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="base">
    </div>

    <section class="container">
        <h3 class="titulocontacto">Resgistrarse</h3>
        <p class="lead textocontacto">Favor de llenar los campos para estar registrado y así tener "una agenda para tu mascota"</p>
    </section>
    <section class="container">
        <div class="registroformulario">
            <form action="login.php" method="get">
                <div>
                    <label class="labelformulario" for="email">E-mail:</label>
                    <input type="email" id="email" name="email"/>
                </div>
                <div>
                    <label class="labelformulario" for="password">Contraseña</label>
                    <input type="password" id="password" name="password" />
                </div>
                <div class="botonregistro form-group">
                    <button class="btn btn-danger">Enviar</button>
                </div>
                
            </form>
        </div>
        <div class="imgregistroformulario">
            
        </div>
    </section>

    <footer>
        <br>
        <p class="derechos"> Derechos reservados a UNIPOLIDGO</p>
        <br>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>