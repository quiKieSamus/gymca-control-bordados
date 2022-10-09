<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Gymca Control Bordados</title>


</head>

<body>
    <!-- <div>
        <div class="container">
            <h1 class="text-center"><button class="btn btn-secondary btn-block"><a class="alert-link" href="./views/clientInput.html">Ingresar cliente</a></button></h1>
        </div>
        <div class="container">
            <h1 class="text-center"><button class="btn btn-secondary btn-block"><a href="./views/workInput.html">Nueva orden de trabajo</a></button></h1>
        </div>
        <div class="container">
            <h1 class="text-center"><button class="btn btn-secondary btn-block"><a href="./php/list/clientList.php">Lista de clientes</a></button></h1>
        </div>
        <div class="container">
            <h1 class="text-center"><button class="btn btn-secondary btn-block"><a href="">Lista de Órdenes de Trabajo</a></button></h1>
        </div>
    </div> -->
    <?php
    ini_set("display_errors", "1");
    ini_set("display_startup_errors", "1");
    error_reporting(E_ALL);
    require_once('../src/db/db.php'); ?>
    <a href="http://localhost/gymca-control-bordados/public/?view=cliente">Ver Clientes</a>
    <a href="http://localhost/gymca-control-bordados/public/?view=bordado">Ver Bordados</a>
    <a href="http://localhost/gymca-control-bordados/public/?view=login">Iniciar Sesión</a>
    <div class="container">
        <?php require_once('../src/controller/controller.php'); ?>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" rel="stylesheet"></script>
    <script src="./js/script.js"></script>
</body>

</html>