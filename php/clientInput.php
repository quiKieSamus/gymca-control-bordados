<?php 
include 'dbConfig/config.php';


$name = $_POST["name"];
$doc = $_POST["doc"];
$type = $_POST["type"];
$dire = $_POST["address"];

if(isset($name) && isset($doc) && isset($type) && isset($dire)) {
    $sql = "INSERT INTO clientes(nombre, documento, tipo, direccion) VALUES ('$name', '$doc', '$type', '$dire')";

    if(!$con) {
        die("Conexion fallida, asegúrese que los datos para la conexión a la base de datos de los clientes esten correctos.");
    } else {
        $sqlSelect = "SELECT documento FROM clientes WHERE documento='$doc'";
        if(mysqli_num_rows(mysqli_query($con, $sqlSelect)) > 0) {
            echo "<h1>El cliente ya existe</h1>";
        } else{
            mysqli_query($con, $sql);
            echo "<h1>Cliente ingresado correctamente</h1>";
        }
        
    }
} else {
    echo "<h1>Error, uno o más datos en el formulario de clientes fueron ingresados incorrectamente.</h1>";
}

?>