<?php
include_once  $_SERVER['DOCUMENT_ROOT'].'/controladores/Usuarios.php';
$accion=isset($_GET['accion']) ? $_GET['accion'] : '';


if(strcmp($accion,'login')==0){
    $usuario=isset($_POST['exampleInputEmail1']) ? $_POST['exampleInputEmail1'] : '';
    $contra=isset($_POST['exampleInputPassword1']) ? $_POST['exampleInputPassword1'] : '';
    echo "<script>alert('usuario: ${usuario}, contra: ${contra}');</script>";
    $existe=Usuarios::login($usuario,$contra);
    if($existe){
        header("Location: /zdrowie-main/html/index.php");

    }else{
        //echo "<meta http-equiv='refresh' content='0;url=/".$_SERVER['DOCUMENT_ROOT']."/html/logica_redireccion/crud/ingreso.php?login=error"."'>";
        header("Location: /zdrowie-main/html/logica_redireccion/crud/ingreso.php?login=error");

    }


}