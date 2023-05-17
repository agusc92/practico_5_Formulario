<?php
    $nombre=$_POST['nombre'];
    $mail=$_POST['mail'];
    $pass=$_POST['pass'];
    $rePass=$_POST['rePass'];
    $params='';
    if($_POST['pass']==$_POST['rePass']){
       $params="yes/$nombre/$mail/$pass";
    }else{
        $params="no/$nombre/$mail/$pass";
    }
    
    header("location: ../router.php?action=$params");
    


?>