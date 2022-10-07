<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de trabajos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <table class="table table-bordered table-hover">
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Total de Prendas a bordar</th>
                <th>Bordados por Prenda</th>
                <th>Tipo de Trabajo</th>
                <th>Pago al Bordador</th>
                <th>Descripción</th>
                <th>Estado</th>
            </tr>
            <?php
            include('../dbConfig/config.php');

            if ($con->connect_error) {
                die("Conexión Fallida: " . $con->connect_error);
            } else {
                $sql = "SELECT * FROM bordado";
                $sqlResult = $con->query($sql);
                if ($sqlResult->num_rows > 0) {
                    while ($row = $sqlResult->fetch_assoc()) {
                        echo "
                                <tr>
                                <td>$row[id]</td>
                                <td class=success>$row[documento]</td>
                                <td>$row[prenda_total]</td>
                                <td>$row[bordado_prenda]</td>
                                <td>$row[tipo_trabajo]</td>
                                <td>$row[entrada]</td>
                                <td>$row[descripcion]</td>
                                <td>$row[estado]</td>
                                </tr>
                                ";
                    }
                } else {
                    echo "No hay nada que mostrar...";
                }
            }

            ?>
        </table>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" rel="stylesheet"></script>
</body>

</html>