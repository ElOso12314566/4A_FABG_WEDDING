<?php
#index.php;
#En el situaremos la salida de las vistas al usuario y tambien a traves
#de el enviaremos los distintas acciones que el usuario envie al controlador

    require_once ("controladores/plantilla.controlador.php");
    require_once ("controladores/formularios.controlador.php");
    require_once ("modelos/formularios.modelos.php");

    $plantilla = new ControladorPLantilla();
    $plantilla -> ctrTraerPlantilla();

    ?>