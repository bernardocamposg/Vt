<?php
try{

    require_once("conexiones/conexion.php");
    $id = $_REQUEST['idq'];
    $nombre = $_GET['mascota'];
    $raza = $_GET['raza'];
    $edad = $_GET['edad'];
    
    $sql = "UPDATE agendas SET nombre='$nombre',raza='$raza',edad='$edad' WHERE agenda_id=$id";

    $resulta = $conn->query($sql);
    header("Location: bienvenido.php");
    
}
catch(Exception $e){
    $error = $e->getMessage();
    header("Location: agregar.php");
}
?>