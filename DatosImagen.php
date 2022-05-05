<?php

    // $_GET
    // $_POST
    $nombre_imagen = $_FILES['imagen']['name'];
    $tipo_imagen = $_FILES['imagen']['type'];
    $tamano_imagen = $_FILES['imagen']['size'];

    $carpeta_destino = /* $_SERVER['DOCUMENT_ROOT']. */'\\wsl.localhost\Ubuntu-20.04\home\bcontreras\Programas\ConstansKstore\upload';

    // echo $carpeta_destino
    


?>