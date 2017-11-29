
<?php
try{

    require_once("conexiones/conexion.php");
    $id = $_REQUEST['ids'];
    $nombre = $_GET['mascota'];
    $raza = $_GET['raza'];
    $edad = $_GET['edad'];
    
    $sql = "INSERT INTO agendas(nombre,raza,edad,formulario_id)";
    $sql .= "values('{$nombre}','{$raza}','{$edad}',{$id});";
    $resulta = $conn->query($sql);
    header("Location: bienvenido.php");
    
}
catch(Exception $e){
    $error = $e->getMessage();
    header("Location: agregar.php");
}
?>

