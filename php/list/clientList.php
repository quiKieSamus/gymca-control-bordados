<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" rel="stylesheet"></script>
    <title>Lista de Clientes</title>
</head>

<body>
<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">GYMCA</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="../../index.html">Inicio</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
              <li><a href="../navbar-static-top/">Static top</a></li>
              <li><a href="../navbar-fixed-top/">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

    <div class="text-center container-client">
        <div class="search-box">
            <label for="searchBar"><span class="label label-primary">Buscar</span></label>
            <input type="text" name="searchBar" id="searchBar" class="searchTxt">
        </div>
        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        include("../dbConfig/config.php");
        $sql = "SELECT * FROM cliente";
        $sqlQuery = mysqli_query($con, $sql);
        echo "
        <div class='container'>
            <table class=' table table-bordered table-hover clients-table'>     
                <tr>
                <th class='text-center'>Documento</th>    
                <th class='text-center'>Nombre</th>
                <th class='text-center'>Trabajos Realizados</th>    
                <th class='text-center'>Dirección</th>    
                </tr>";
        $i = 0;
        while ($row = mysqli_fetch_array($sqlQuery)) {
            echo "
                        <tr>
                        <td class='success'>$row[documento]</td>
                        <td class='text-center'>$row[nombre]</td>
                        <td>$row[trabajoTotal]</td>
                        <td>$row[direccion]</td>
                        </tr>";
            $i++;
        }
        echo "</table>
        
        </div>";
        ?>
    </div>
    <script src="../../js/script.js"></script>
</body>

</html>