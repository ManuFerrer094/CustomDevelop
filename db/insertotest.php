<?php
$_titulo = $_POST['titulo'];
$_descripcion = $_POST['descripcion'];
$_titulo_video = $_POST['titulo_video'];

$dir_subida = '../recursos/';

$fichero_subido = $dir_subida . basename($_FILES['file']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['file']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
    
    $mysqli = new mysqli('127.0.0.1','root','','cdev');
    $mysqli->set_charset("utf8");

    $res = $mysqli->query("INSERT INTO trabajos(
        titulo,
        descripcion,
        titulo_video,
        url_video
        )
        VALUES  (
            '".$_titulo."',
            '".$_descripcion."', 
            '".$_titulo_video."',
            '".$fichero_subido ."'
            
        )"
    );
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

echo 'Más información de depuración:';
print_r($_titulo_video);
print_r($_FILES);
print_r($_descripcion);
print_r($_titulo);

print "</pre>";




    