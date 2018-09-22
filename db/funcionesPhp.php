<?php
function selecionarTodo ($ruta,$usuario,$pass,$DB,$tabla){

    if($ruta ==null || $ruta == ''){$ruta='127.0.0.1';}
    if($usuario ==null || $usuario == ''){$ruta='root';}

    $mysqli = new mysqli($ruta, $usuario,$pass,$DB);
    $mysqli->set_charset("utf8");
    
    $res = $mysqli->query("SELECT * FROM ".$tabla."");
    
    $result = [];

    if($res != null || $res != ''){
        while($f = $res->fetch_object()){
            $result =$f;
        }
    
    }
    else{
        echo 'Existe algun problema con tu base de datos';
    }

    return $result;
}

//selecionarTodo('127.0.0.1','root','','cdev','trabajos');

