

<?php
ini_set("display_errors", "1");
ini_set("display_startup_errors", "1");
error_reporting(E_ALL);

if ($_GET['view'] === 'cliente') {
    require_once('../src/model/clienteModel.php');
    $clienteModel = new clienteModel;
    $clienteData = $clienteModel->select();
    require_once("../src/views/clienteView.php");
}
if ($_GET['view'] === 'bordado') {
    require_once('../src/model/bordadoModel.php');
    $bordadoModel = new bordadoModel;
    $bordadoData = $bordadoModel->select();
    require_once('../src/views/bordadoView.php');
}
