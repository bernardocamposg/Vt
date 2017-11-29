<?php
try{

    require_once("conexiones/conexion.php");
    $id = $_REQUEST['idq'];

    $sql = "Delete from agendas where agenda_id=$id";

    $resulta = $conn->query($sql);
    header("Location: bienvenido.php");
    
}
catch(Exception $e){
    $error = $e->getMessage();
    header("Location: agregar.php");
}
?>