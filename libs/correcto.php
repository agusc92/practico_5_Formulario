<?php
function correcto($nombre,$mail){
    require 'smarty/libs/smarty.class.php';

    $smarty = new Smarty();
    $smarty->assign('nombre',$nombre);
    $smarty->assign('mail',$mail);

    $smarty->display('../templates/correcto.tpl');
}



?>