<?php
session_start();
$correo = $_SESSION['email'];
require_once("conexiones/conexion.php");
$sql = "SELECT*from formularios where email='{$correo}'";
$resultado = $conn->query($sql);
$actor = $resultado->fetch_assoc();
?>
<?php 
$id = $_REQUEST['idq'];
require_once("conexiones/conexion.php");
$query= "Select nombre,raza,edad,agenda_id from agendas where agenda_id='{$id}'";
$resu=$conn->query($query);
$row=$resu->fetch_assoc();
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
                    <a class="nav-link" href="bienvenido.php" width: 50px>Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="agregar.php">Agregar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="modificar.php">Modificar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Cerrar Sesion</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="base">
    </div>
    <h3>Modificar</h3>
    
    <div class="registroformulario">
            <form action="modificando.php" method="get" name="formMascota">
                
                <div>
                    <label class="labelformulario" for="nombre">Nombre de su mascota:</label>
                    <input type="text" id="mascota" name="mascota" maxlength="20" value="<?php echo $row['nombre'] ?>"/>
                </div>
                <div>
                    <label class="labelformulario" for="raza">Raza de su mascota:</label>
                    <input type="text" id="raza" name="raza" maxlength="20" value="<?php echo $row['raza'] ?>"/>
                </div>
                <div>
                    <label class="labelformulario" for="edad">Edad de su mascota:</label>
                    <input type="text" id="edad" name="edad" maxlength="20" value="<?php echo $row['edad'] ?>"/>
                </div>
                    <input type="submit" value="guardar" id="subir" onClick="guardarmascotas()">
                    <input type="hidden" name="idq" value="<?php echo $row['agenda_id']; ?>">
            </form>
        </div>
    
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