<?php
$usuario = $_GET['email'];
$pass = $_GET['password'];
if(empty($usuario) || empty($pass)){
header("Location: iniciarSesion.php");
exit();
}
mysql_connect('localhost','root','123456789') or die("Error al conectar " . mysql_error());
mysql_select_db('registro') or die ("Error al seleccionar la Base de datos: " . mysql_error());
$result = mysql_query("SELECT * from formularios where email='" . $usuario . "'");
if($row = mysql_fetch_array($result)){
if($row['password'] == $pass){
session_start();
$_SESSION['email'] = $usuario;
header("Location: bienvenido.php");
}else{
header("Location: iniciarSesion.php");
exit();
}
}else{
header("Location: iniciarSesion.php");
exit();
}
?>
