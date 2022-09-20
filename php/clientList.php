<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>

<body>
    <div>
        <input type="text" name="searchBar" id="searchBar" class="searchTxt">
    </div>
    <?php
    include("./dbConfig/config.php");
    $sql = "SELECT * FROM CLIENTES";
    $sqlQuery = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($sqlQuery)) {
        echo $row['nombre'] . "<br>";
    }

    ?>
</body>

</html>