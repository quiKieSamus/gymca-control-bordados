<?php
include("./dbConfig/config.php");

if (isset($_POST['doc']) && isset($_POST['description'])) {
    $doc = $_POST['doc'];
    $desc = $_POST['description'];
    $emb = $_POST['embroidery'];
    $embBack = $_POST['back'];
    $sql0 = "SELECT documento FROM clientes WHERE documento='$doc'";
    $sql0Query = mysqli_query($con, $sql0);
    $sql0Result = mysqli_fetch_array($sql0Query);
    if (mysqli_num_rows(mysqli_query($con, $sql0)) > 0) {
        //client exists and the order is processed
        if ($emb === 'true') {
            //work has embroidery
            if (isset($_POST['embClothQty']) && isset($_POST['embXCloth'])) {
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
                $sql1 = "INSERT INTO trabajo(descripcion, cantidad, total, cliente, bordadoPrenda) VALUES('$desc', '$embClothQty', '$total', '$sql0Result[documento]', '$embXCloth')";
                mysqli_query($con, $sql1);
            } else {
                //information was set incorrectly
                echo "<h1>Los datos fueron ingresados incorrectamente</h1>";
            }
        } else {
            $sqlToInsert0 = "INSERT INTO trabajo(descripcion, cliente) VALUES ('$desc', '$sql0Result[documento]')";
            mysqli_query($con, $sqlToInsert0);
        }
    } else {
        //client doesn't exists and the creation of the new client must be done 
        echo "<h1>Cliente no existe, cree uno nuevo <a href='../clientInput.html'>acá</a></h1>";
    }
} else {
    //data was set incorrectly
    echo "<h1>Los datos fueron ingresados incorrectamente</h1>";
}
