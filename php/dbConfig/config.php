<?php 
    $dbServer = "127.0.0.1";
    $name = "gymca";
    $password = "dostoyevskiwiiu10100";
    $user = "artorias";
    $con = new mysqli($dbServer, $user, $password, $name);

    function checkConnection ($con) {
        if  ($con->connect_error) {
            die ("Connection failed: " . $con->connect_error);
        } else {
            echo "Conecction successful";
        }
    }

?>
