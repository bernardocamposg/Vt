<?php
try{
    require_once("conexiones/conexion.php");
    $nombre = $_GET['nombre'];
    $paterno = $_GET['apaterno'];
    $materno = $_GET['amaterno'];
    $telefono = $_GET['telefono'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    
    $sql = "INSERT INTO formularios(nombre,apaterno,amaterno,telefono,email,password)";
    $sql .= "values('{$nombre}','{$paterno}','{$materno}','{$telefono}','{$email}','{$password}');";
    $resultado = $conn->query($sql);
    
    header("Location: iniciarSesion.php");
}

catch(Exception $e){
    $error = $e->getMessage();
    header("Location: registrarse.php");
}

?>
