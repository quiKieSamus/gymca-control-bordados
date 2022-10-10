<?php
// header("location: http://localhost/gymca-control-bordados/public/?view=home");

if($_GET['view'] === 'inputBordado') {
    require_once("../src/views/bordado/insertBordado.php");
}
if ($_GET['view'] === 'inputCliente') {
    require_once("../src/views/cliente/insertCliente.php");
}
if ($_GET['view'] === 'cliente') {
    require_once('../src/model/clienteModel.php');
    $clienteModel = new clienteModel;
    $clienteData = $clienteModel->select();
    require_once("../src/views/cliente/clienteView.php");
}
if ($_GET['view'] === 'bordado') {
    require_once('../src/model/bordadoModel.php');
    $bordadoModel = new bordadoModel;
    $bordadoData = $bordadoModel->select();
    require_once('../src/views/bordado/bordadoView.php');
}
if($_GET['view'] === 'login') {
    require_once('../src/views/login/loginView.php');
      
} 

if ($_GET['view'] === 'home') {
    require_once('../src/views/home.php');
}

?>