<?php
include 'libs/formulario.php';
include 'libs/correcto.php';
include 'libs/estruct.php';
$ruta=[];
if(!empty($_GET['action'])){
    $ruta =explode('/',$_GET['action']);
}else{
    $ruta=['home'];
}
mostrar('titulo');

    switch($ruta[0]){
        case 'yes':
            correcto($ruta[1],$ruta[2]);
        break;
        
        case 'no':
            formulario($ruta[1],$ruta[2],$ruta[3]);
            break;
        default:
            formulario('','','');
            break;

            }
    
    


?>