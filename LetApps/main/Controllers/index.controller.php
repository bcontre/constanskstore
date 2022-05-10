<?php

namespace LetApps\Main\Controllers;

class index_Controller
{
    public function start()
    {
        $oHttp = Http();
        //Recibir los datos del formulario de registro
        if ((isset($_POST['form-login'])) && ($_POST['form-login'] == 1)) {
            //Recibir los datos
            $sNombre = $oHttp->getParam('nombre');
            View()->setValues([
                'nombre' => $sNombre
            ]);
        }
    }
}
    