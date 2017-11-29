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
    <nav class="navbar navbar-light navbar-toggleable-lg" style="background-color:whitesmoke">
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
                    <a class="nav-link active" href="contacto.php">Contacto</a>
                </li>
                <li class="res nav-item ">
                    <a class="nav-link" href="registrarse.php">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="iniciarSesion.php">Iniciar Sesion</a>
                </li>
            </ul>
        </div>
    </nav>
    </section>
    <div class="base">
    </div>

<br>
<br>
    <section class="container">
        <h3 class="titulocontacto">Contactanos</h3>
        <p class="lead textocontacto">Para alguna sugerencia o alguna duda favor de enciar un mensaje y asi resolveremos sus dudas.</p>
    </section>
    <section class="container-fluid">
        <div class="contactoformulario">
            <form action="/my-handling-form-page" method="post">
                <div>
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" />
                </div>
                <div>
                    <label for="mail">E-mail:</label>
                    <input type="email" id="mail" />
                </div>
                <div>
                    <label for="msg">Mensaje:</label>
                    <textarea id="msg"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-danger">Enviar</button>
                </div>
            </form>
        </div>
    </section>
    <br>
    <div class="container">
        <h3 class="titulocontacto">Ubicación</h3>
        <!--<iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.2490370352634!2d-104.55607678563608!3d24.022281684253798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bb0afe49269e1%3A0x43644f8b73e439ad!2sUniversidad+Politecnica+de+Durango!5e0!3m2!1ses-419!2smx!4v1511414338422" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
    </div>
    <br>
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