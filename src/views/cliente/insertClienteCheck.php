<?php 

ini_set("display_errors", "1");
ini_set("display_startup_errors", "1");
error_reporting(E_ALL);

require_once("../../model/clienteModel.php");
$clienteM = new ClienteModel;

if (isset($_POST['name']) && isset($_POST['doc']) && isset ($_POST['direccion'])) {
    $clienteM->insert($_POST['name'], $_POST['doc'], $_POST['direccion']);
    header("location: http://localhost/gymca-control-bordados/public/?view=cliente");
}

?>