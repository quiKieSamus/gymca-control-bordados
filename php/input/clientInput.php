<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Cliente</title>
</head>

<body>
    <?php
    include "../dbConfig/config.php";

    $name = $_POST["name"];
    $doc = $_POST["doc"];
    $dire = $_POST["address"];
    

    if (isset($name) && isset($doc) && isset($dire)) {
        $sql = "INSERT INTO cliente(nombre, documento, direccion) VALUES ('$name', '$doc', '$dire')";
        
        if (!$con) {
            die("Conexion fallida, asegúrese que los datos para la conexión a la base de datos de los clientes esten correctos.");
        } else {
            
            $sqlSelect = "SELECT documento FROM cliente WHERE documento='$doc'";
            if (mysqli_num_rows(mysqli_query($con, $sqlSelect)) > 0) {
                echo "<h1>El cliente ya existe</h1>";
            } else {
                mysqli_query($con, $sql);
                echo "<h1>Cliente ingresado correctamente</h1>";
            }
        }
    } else {
        echo "<h1>Error, uno o más datos en el formulario de clientes fueron ingresados incorrectamente.</h1>";
    }

    ?>
    <div class="">
        <h1 ><a href="../list/clientList.php">Ver Lista de Clientes</a></h1>
    </div>
</body>

</html>