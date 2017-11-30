<!DOCTYPE html>
<html>

<head>
    <title>Tecnhology Services</title>
    <link rel="stylesheet" href="css/estilos.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/font-awesome.css">

    <script src="js/jquery.js"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/bootstrap.min.js"></script>


</head>

<body>
    
    <section class="encabezado">
        <nav class="navbar navbar-light navbar-toggleable-lg" style="background-color:lightblue;">

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span><img src="img/iconoMenu.png" width="46px"></span>
        </button>
            <a class="navbar-brand " href="#index.html">
        <img src="img/logoAnimal.png" width="200"class="d-inline-block align-top" alt="">
        </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">
                <ul class="navbar-nav" id="">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php" width: 50px>Inicio</a>
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
                    <li class=" nav-item ">
                        <a class="nav-link" href="registrarse.php"><img src="img/iconoRegistrar.png" width="30px"></a>
                    </li>
                    <li class=" nav-item">

                        <button type="button" class="btn"
                        
                        id="myBtn" href="iniciarSesion.php"><img src="img/iconoLogin.png" width="30px"></button>
                    </li>
                </ul>
            </div>
        </nav>

    </section>


    <div class="container">


        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="padding:35px 50px;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4><span class="glyphicon glyphicon-lock"></span> Ingresar</h4>
                    </div>
                    <div class="modal-body" style="padding:40px 50px;">
                        <form role="form" action="login.php">
                            <div class="form-group">
                                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Usuario</label>
                                <input type="text" class="form-control" id="usrname" placeholder="Ingresar Email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
                                <input type="text" class="form-control" id="psw" placeholder="Ingresar Contraseña" name="password">
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="" checked>Recordarme</label>
                            </div>

                            <button type="submit" class="btn btn-success  btn-block"><span class="glyphicon glyphicon-off"></span> Ingresar</button>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                        <p>Not a member? <a href="#">Sign Up</a></p>
                        <p>Forgot <a href="#">Contraseña?</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <div class="base">
    </div>
    <div class="bloqueslidercompleto">
        <br>
        <br>
        
        
        <br>
        

        <h2 class="tituloslider">Algunos Servicios</h2>
        <div class="bloqueslider">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="imgs d-block img-fluid" src="img/Slider/estetica.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="imgs d-block img-fluid" src="img/Slider/hospital.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="imgs d-block img-fluid" src="img/Slider/cirugia.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="imgs d-block img-fluid" src="img/Slider/laboratorio.png" alt="First slide">
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span></a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span></a>
                
            </div>
            
        </div>
    </div>

<div class="container">
  <button type="button" class="btn flecha " data-toggle="collapse" data-target="#demo"><h3>Temas de Interes</h3>
    <a><img src="img/iconoFlecha.png" width="40px"></a>
    </button>
  <div id="demo" class="collapse">
      <br>
      <br>
      <br>
        <h5>Esterilización</h5>
        <p>Muchos propietarios nos preguntan sobre las ventajas e inconvenientes de castrar a sus mascotas. En el caso de los gatos, la gran mayoría se esterilizan, para evitar tener cachorros y suprimir los molestos maullidos durante el celo en las hembras; mientras que los machos se castran para evitar el "marcaje del territorio" con orina y el vagabundeo. En el caso de los perros y perras las causas no son tan imperiosas, y en la práctica se castran menos animales, aunque las ventajas son también muchas, al evitar camadas indeseadas, mejorar algunas conductas y prevenir muchas enfermedades como los tumores mamarios, infecciones de matriz, patologías testiculares o prostáticas, etc. Es importante recordar también que NO es necesario que una hembra tenga una camada por su salud, aun a pesar de que se trate de un tópico muy extendido.</p>
        <h5>Prutito y muda del pelo anormal</h5>
        <p>Todos los perros se rascan en condiciones normales y sin que tenga que existir ninguna patología. Deberemos detectar aquellos animales en que la causa sea alguna alteración como pueden ser desde parásitos externos, hasta alergias, infecciones de piel o cualquier otra patología de la piel y/o el manto piloso. Los perros mudan el pelo dos veces al año, aunque dependiendo de las condiciones que rodeen al habitad del animal, podrá prolongarse mucho tiempo. Así será más normal y más breve aunque intensa, la muda de un animal que viva en el exterior, que aquel que lo haga en un piso con la temperatura y demás factores ambientales artificiales. Para el cuidado del pelo debe evitarse bañar al animal más de una vez al mes, siendo sin embargo el cepillado recomendable realizarlo con la mayor frecuencia posible. </p>
        <h5>La mejor alimentación</h5>
        <p>Hoy en día conocemos con mucha precisión las necesidades nutricionales de los perros y gatos. Ello permite a los fabricantes ofrecer unos productos muy equilibrados y de gran calidad. La alimentación "casera" está en claro retroceso por su incomodidad y dificultad de obtener un equilibrio similar a los productos comerciales. Dentro de los preparados para animales el alimento seco es, sin lugar a dudas, el producto de más aceptación tanto por calidad, comodidad e incluso por precio. En el mercado existen infinidad de productos de mayor o menor calidad, adaptados a la edad de cada animal, a su nivel de actividad, dietéticos para determinadas enfermedades, y con una gran variedad de precios por lo que siempre encontraremos el que mejor se adapte a nuestro perro. </p>
        <h5> Vacunaciones</h5>
        <p>Los programas de vacunación deben instaurarse de forma individualizada para cada animal, en función de la edad, del estado sanitario, del estado inmunitario, incluso del hábito de vida del animal. Como norma general los perros se vacunan entre el mes y medio y los 3 meses, con dos o tres dosis de vacuna frente a "Parvovirosis", "Hepatitis", "Moquillo", "Leptospirosis"; y posteriormente contra la "Rabia". Los gatos se vacunan frente a "Panleucopenia", "Coriza", "Leucemia infecciosa" y "Rabia". Hasta que no esté completo el programa de vacunación, no deberán sacarse los animales a la calle ni bañarlos pues suponen factores de alto riesgo. </p>
  </div>
</div>


    
    <footer>
        <br>
        <br>
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
