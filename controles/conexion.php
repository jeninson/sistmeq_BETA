<?php 
    $conn = null;
    $host = "127.0.0.1";
    $nbd = "dbsistmeq";
    $ubd = "Opinto";
    $pbd = "xyz1234";

    $conn = mysqli_connect($host, $ubd, $pbd, $nbd);
    // Check connection
    if (!$conn) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    //echo "Conexion con MySQL... Correcta";
    //mysqli_close($conn);
?>