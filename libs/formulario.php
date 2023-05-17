<?php

    function formulario($nombre,$mail,$pass){
        require 'smarty/libs/smarty.class.php';
     
        
    $smarty = new Smarty();
    $smarty->assign('ruta','libs/verificacion.php');

    $smarty->assign('nombre',$nombre);
    $smarty->assign('mail',$mail);
    $smarty->assign('pass',$pass);
    $smarty->display('../templates/formulario.tpl');
    
}
?>