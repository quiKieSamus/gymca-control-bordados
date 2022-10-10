<?php 

//doc = documento; totalCloth = total de prendas; embByCloth = bordado por prenda;
//backQty = cantidad de bordados en espalda; type = tipo de trabajo (interno o externo)
require_once('../../model/bordadoModel.php');
require_once('../')
$bordadoM = new BordadoModel;
if (isset($_POST['doc']) && isset($_POST['totalCloth']) && isset($_POST['desc']) && isset($_POST['embByCloth']) && isset($_POST['type'])) {
    $doc = $_POST['doc'];
    $totalCloth = $_POST['totalCloth'];
    $embByCloth = $_POST['embByCloth'];
    $type = $_POST['type'];
    $desc = $_POST['desc'];
    $total = $totalCloth * $embByCloth * 0.2;
    $bordadoM->insert($totalCloth, $embByCloth, $total, $desc, $doc, $type);

}



?>