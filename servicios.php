<!DOCTYPE html>
<html>

<head>
    <title>Tecnhology Services</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <section class="navbar navbar-light navbar-toggleable-lg" style="background-color: lightblue">
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
                    <a class="nav-link active" href="servicios.php">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nosotros.php">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                </li>
            <li class=" nav-item ">
                        <a class="nav-link" href="registrarse.php"><img src="img/iconoRegistrar.png" width="30px"></a>
                    </li>
                    <li class=" nav-item">

                        <button type="button" class="btn"
                        
                        id="myBtn" href="iniciarSesion.php"><img src="img/iconoLogin.png" width="30px"></button>
                </li>
            </ul>
        </div>
    </section>
    
    
     <div class="container">


        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="padding:35px 50px;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                    </div>
                    <div class="modal-body" style="padding:40px 50px;">
                        <form role="form" action="login.php">
                            <div class="form-group">
                                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                                <input type="text" class="form-control" id="usrname" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                <input type="text" class="form-control" id="psw" placeholder="Enter password" name="password">
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="" checked>Remember me</label>
                            </div>

                            <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                        <p>Not a member? <a href="#">Sign Up</a></p>
                        <p>Forgot <a href="#">Password?</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="base">
    </div>
    <h3 class="tituloindex">Servicios</h3>
    <div class="serimg">
        <img class="serimg" src="img/Servicios/cirugia.png" width="400px">
        <img class="serimg" src="img/Servicios/estetica.png" width="400px">
    </div>
    <br>
    <div class="serimg">
        <img class="serimg" src="img/Servicios/hospital.png" width="400px">
        <img class="serimg" src="img/Servicios/laboratorio.png" width="400px">
    </div>
    <br>
    <footer>
        <br>
        <p class="derechos"> Derechos reservados a UNIPOLIDGO</p>
        <br>
    </footer>
    
     <script>
        $(document).ready(function() {
            $("#myBtn").click(function() {
                $("#myModal").modal();
            });
        });

    </script>
    
</body>

</html>