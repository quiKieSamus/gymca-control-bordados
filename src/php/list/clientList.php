<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css" type="text/css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


  <title>Lista de Clientes</title>
</head>

<body>

  <div class="text-center container-client">
    <div class="search-box">
      <label for="searchBar"><span class="label label-primary">Buscar</span></label>
      <input type="text" name="searchBar" id="searchBar" class="searchTxt">
    </div>
    <?php
    include("../dbConfig/config.php");
    $sql = "SELECT * FROM cliente";
    $sqlResult = $con->query($sql);
    echo "
        <div class='container'>
            <table class=' table table-bordered table-hover clients-table'>     
                <tr>
                <th class='text-center'>Documento</th>    
                <th class='text-center'>Nombre</th>
                <th class='text-center'>Trabajos Realizados</th>    
                <th class='text-center'>Dirección</th>    
                </tr>";
    while ($row = $sqlResult->fetch_assoc()) {
      echo "
                        <tr>
                        <td class='success'>$row[documento]</td>
                        <td class='text-center'>$row[nombre]</td>
                        <td>$row[cantidad_trabajo]</td>
                        <td>$row[direccion]</td>
                        </tr>";
    }
    echo "</table>
        
        </div>";
    ?>
  </div>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" rel="stylesheet"></script>
</body>

</html>