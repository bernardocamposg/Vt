<?php
session_start();
$correo = $_SESSION['email'];
require_once("conexiones/conexion.php");
$sql = "SELECT*from formularios where email='{$correo}'";
$resultado = $conn->query($sql);
$actor = $resultado->fetch_assoc();
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Tecnhology Services</title>
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/menu.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <section class="encabezado">
        <nav class="navbar navbar-light navbar-toggleable-lg" style="background-color:lightblue;">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
            <a class="navbar-brand " href="#index.html">
        <img src="img/logoAnimal.png" width="170"class="d-inline-block align-top" alt="">
        </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">
                <ul class="navbar-nav" id="">
                    <li class="nav-item">
                        <a class="nav-link active" href="bienvenido.php" width: 50px>Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="agregar.php?id=<?php echo $actor['id_formulario'];?>">Agregar</a>
                    </li>
                    <li class="nav-item">
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
        <h3>
            <?php
    
    echo "Bienvenido " . $actor['nombre'] . " " . $actor['apaterno'] . " " . $actor['amaterno'] . ".";
    ?>
        </h3>
        
        
        <h2>Agenda</h2>
        <br>
        <div class="contenedortabla">
        
        <table id="customers">
        <tr>
            <th class="tabla1">Animal</th>
            <th class="tabla2">Raza</th>
            <th class="tabla3">Edad</th>
            <th class="tabla4">Modificar</th>
        <th class="tabla5">Eliminar</th>
        </tr>
        <?php 
    require_once("conexiones/conexion.php");
    $query= "Select nombre,raza,edad,agenda_id from agendas where formulario_id={$actor['id_formulario']}";
        $resu=$conn->query($query);
        while($row=$resu->fetch_assoc()){
     ?>
        <tr>
            <td class="columnas1">
                <?php echo $row['nombre']; ?>
            </td>
            <td class="columnas2">
                <?php echo $row['raza']; ?>
            </td>
            <td class="columnas3">
                <?php echo $row['edad']; ?>
            </td>
            <td class="columnas4"><a href="modificar.php?idq=<?php echo $row['agenda_id']; ?>">Modificar</a></td>
            <td class="columnas5"><a href="eliminar.php?idq=<?php echo $row['agenda_id']; ?>">Eliminar</a></td>
        </tr>

        <?php 
            }
    ?>
            </table>
        </div>

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