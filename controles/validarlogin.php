<?php

    include "conexion.php";
    $json="";
    $msg="Los datos del Usuario (".$_GET["USUARIO"].") son incorrectos";
    if(!empty($_GET["USUARIO"]) && !empty($_GET["KEY"])){
        $usuario = htmlspecialchars($_GET["USUARIO"]);
        $clave = htmlspecialchars($_GET["KEY"]);
        $enc=0;
        $qry = "SELECT * FROM `tbusuario` WHERE `UsuUser`='".$usuario."' AND `UsuPass`='".$clave."'";
        $sql = $conn -> query ($qry);                    
        while ($valores = mysqli_fetch_array($sql)) {
            $enc=1;            
            session_start();
            $_SESSION["ID_USU"]=$valores["UsuID"];
            $_SESSION["NOMBRES_USU"]=$valores["UsuNombres"];
            $_SESSION["CORREO_USU"]=$valores["UsuCorreo"];
            //echo "\n***** V A L I D A N D O *****\nNombre del Usuario: ".$valores["UsuNombres"]."\nApellidos del Usuario: ".$valores["UsuApellidos"];
        }
        $json="enc: ".$enc;      
    }
    mysqli_close($conn);
    $msg = json_decode($json, true);
    echo $enc;  
?>