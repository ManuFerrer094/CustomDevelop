<?php

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$pais = $_POST['pais'];
$ciudad = $_POST['ciudad'];
$cp = $_POST['cp'];
$salario = $_POST['salario'];
$date = "10";
//$oficio = $_POST['oficio'];

    $mysqli = new mysqli('127.0.0.1','root','','cdev');
    $mysqli->set_charset("utf8");

    
    $res = $mysqli->query("INSERT INTO usuarios(
        nombre,
        apellidos,
        telefono,
        email,
        pais,
        ciudad,
        codigopostal,
        estado,
        salario_deseado,
        oficio,
        _url,
        fecha
        )
        VALUES  (
            '".$nombre."',
            '".$apellidos."', 
            '".$telefono."',
            '".$email."',
            '".$pais."',
            '".$ciudad."',
            '".$cp."',
            '0',
            '".$salario."',
            'AU AU AU',
            '/usu',
            '".$date."'
 
        )"
    );

    echo $res;


?>


    

    

   