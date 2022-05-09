<?php

$COD_archivo = $_POST['COD_archivo'];

$directorio = $_SERVER['DOCUMENT_ROOT'] . '/upload/' . $COD_archivo;

foreach ($_FILES['archivo']['tmp_name'] as $key => $tmp_name) {

    if ($_FILES['archivo']['name'][$key]) {
        $filename = $_FILES['archivo']['name'][$key];
        $temporal = $_FILES['archivo']['tmp_name'][$key];

        if (!file_exists($directorio)) {
            mkdir($directorio, 0777);
        }

        $dir = opendir($directorio);
        $ruta = $directorio . '/' . $filename;
        print_r($ruta);
        if (file_exists($ruta)) {
            if (move_uploaded_file($temporal, $ruta . 'copy')) {
                echo 'el archivo ' . $filename . ' se ha almacenado correctamente';
            } else {
                echo 'error<br>';
            }
        } else {
            if (move_uploaded_file($temporal, $ruta)) {
                echo 'el archivo ' . $filename . ' se ha almacenado correctamente';
            } else {
                echo 'error<br>';
            }
        }

        closedir($directorio);
    }
}

