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
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
    </head>

    <body>
        <nav class="navbar navbar-light navbar-toggleable-lg" style="background-color: #f4f4f4;">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
            <a class="navbar-brand " href="#index.html">
        <img src="img/logoAnimal.png" width="130"class="d-inline-block align-top" alt="">
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
                        <a class="nav-link" href="index.php">Cerrar Sesion</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="base">
        </div>
        <h3>
            <?php
    
    echo "Bienvenido " . $actor['nombre'] . " " . $actor['apaterno'] . " " . $actor['amaterno'] . ".";
    ?>
        </h3>
        
        
        <h2>Agenda</h2>
        <br>
        <table border="3">
        <tr>
            <td>Animal</td>
            <td>Raza</td>
            <td>Edad</td>
        </tr>
        <?php 
    require_once("conexiones/conexion.php");
    $query= "Select nombre,raza,edad,agenda_id from agendas where formulario_id={$actor['id_formulario']}";
        $resu=$conn->query($query);
        while($row=$resu->fetch_assoc()){
     ?>
        <tr>
            <td>
                <?php echo $row['nombre']; ?>
            </td>
            <td>
                <?php echo $row['raza']; ?>
            </td>
            <td>
                <?php echo $row['edad']; ?>
            </td>
            <td><a href="modificar.php?idq=<?php echo $row['agenda_id']; ?>">Modificar</a></td>
            <td><a href="eliminar.php?idq=<?php echo $row['agenda_id']; ?>">Eliminar</a></td>
        </tr>

        <?php 
            }
    ?>
            </table>

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