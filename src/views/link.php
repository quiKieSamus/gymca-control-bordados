<?php
//the idea here is to create link items that will work no matter the folder the user is in, my ideas are to do something with the directory but is a work in progress

function getProjectRoot($projectRoot)
{
    $root = $_SERVER['DOCUMENT_ROOT'];
    $i = strlen($root);
    $realPRoot = '';
    while ($i - 1 > 0) {
        $realPRoot .= $root[$i];
        if ($root[$i] === '/') {
            $realPRoot = strrev($realPRoot);
            break;
        }
        $i--;
    }
    
    return $realPRoot.'/'. $projectRoot;
}
echo getProjectRoot('gymca-control-bordados');
echo scandir('../')[5];

// echo getProjectRoot('gymca-control-bordados');

?>

<!-- <a href="">Ingresar cliente</a>
<a href="">Ver Clientes</a>
<a href="">Ver Órdenes de trabajo</a> -->