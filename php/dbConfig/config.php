<?php 
    $dbServer = "127.0.0.1";
    $name = "gymca";
    $password = "dostoyevskiwiiu10100";
    $user = "artorias";
    $con = new mysqli($dbServer, $user, $password, $name);
    if ($con->connect_error) {
        die("Conexión Fallida: " . $con->connect_error);
    } else {
        echo "Conexión exitosa";
    }
?>
