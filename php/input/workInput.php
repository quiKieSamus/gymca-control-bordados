<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Orden de Trabajo</title>
</head>

<body>

    <?php
    include("../dbConfig/config.php");

    if (isset($_POST['doc']) && isset($_POST['description'])) {
        $doc = $_POST['doc'];
        $desc = $_POST['description'];
        $emb = $_POST['embroidery'];
        $embBack = $_POST['back'];
        $sql0 = "SELECT documento FROM cliente WHERE documento='$doc'";
        if ($con->connect_error) {
            die("Conexión Fallida: " . $con->connect_error);
        } else {
            //connection is working and open
            $sql0Query = $con->query($sql0);
            $sql0Result = $sql0Query->fetch_assoc();
            $amountOfWork = "SELECT cantidad_trabajo FROM cliente WHERE documento='$doc'";
            $amountOfWorkQuery = $con->query($amountOfWork);
            $amountOfWorkResult = $amountOfWorkQuery->fetch_assoc();
            $increaseWorkNumber = "UPDATE cliente SET cantidad_trabajo=('$amountOfWorkResult[cantidad_trabajo]' + 1) WHERE documento='$doc'";

            if ($sql0Query->num_rows > 0) {
                //client exists and the order is processed
                if ($emb === 'true') {
                    //work has embroidery
                    if (isset($_POST['embClothQty']) && isset($_POST['embXCloth'])) {
                        //embroidery data was set correctly
                        $embClothQty = $_POST['embClothQty'];
                        $embXCloth = $_POST['embXCloth'];
                        $total = ($embClothQty * $embXCloth * 0.2);

                        if ($embBack === 'true') {
                            //clothes have back embroidery
                            if (isset($_POST['backEmbQty'])) {
                                $backEmbQty = $_POST['backEmbQty'];
                                $total += ($backEmbQty * 0.3);
                            } else {
                                //data was set incorrectly 
                                echo "<h1>Los datos fueron ingresados incorrectamente</h1>";
                            }
                        }
                        $sql1 = "INSERT INTO bordado(prenda_total, bordado_prenda, entrada, descripcion, documento) VALUES('$embClothQty', '$embXCloth', '$total', '$desc', '$sql0Result[documento]')";
                        
                        $con->query($sql1);
                        $con->query($increaseWorkNumber);
                        
                        $con->close();
                        
                        echo "<h1>Orden añadida correctamente</h1>";
                    } else {
                        //information was set incorrectly
                        echo "<h1>Los datos fueron ingresados incorrectamente</h1>";
                    }
                } else {
                    //work has no embroidery, therefore goes to another database of confection
                    $sqlForConfection = "INSERT INTO confeccion(descripcion, cliente) VALUES ('$desc', '$doc')";
                    
                    $con->query($sqlForConfection);
                    $con->query($increaseWorkNumber);
                    
                    $con->close();
                }
            } else {
                //client doesn't exists and the creation of the new client must be done 
                echo "<h1>Cliente no existe, cree uno nuevo <a href='../../views/clientInput.html'>acá</a></h1>";
            }
        
        
        }
    } else {
        //data was set incorrectly
        echo "<h1>Los datos fueron ingresados incorrectamente</h1>";
    }
    ?>

</body>

</html>