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
    echo '
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    
    <body>
    
    <main>
    ';

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
    
    echo '
    </main>
    <footer>
    
    </footer>
    </body>
    
    </html>
    
    ';



?>