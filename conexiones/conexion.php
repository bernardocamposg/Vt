<?php
    $conn = new mysqli('localhost', 'root','123456789','registro');
    if($conn->connect_error){
        echo $conn->connect_error;
    }
?>