<?php
require_once 'funcionesPhp.php';

?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--
<form enctype="multipart/form-data" action="insertotest.php" method="POST">
<div>
<p>introduce el titulo de tu trabajo</p>
<input type="Text" id="titulo" name="titulo">
<p>introduce una descripcion</p>
<textarea rows="4" cols="50" id="descripcion"></textarea>
<p>introduce un titulo para tu video<p>
<input type ="Text" id="titulo_video" >
    <input name="uploadedfile" type="file"/>
    <input type="submit" value="Subir archivo" onclick="realizaProceso($('#titulo').val(), $('#descripcion').val(),$('#titulo_video').val());"/>
</form>
Resultado:<span id="resultado">0</span>
</div>-->

<form action="insertotest.php" method="post" enctype="multipart/form-data">
 <p>Titulo: <input type="text" name="titulo" /></p>
 <p>Descripcion : <input type="text" name="descripcion" /></p>
 <p>Titulo_video : <input type ="Text" id="titulo_video" name="titulo_video" ></p>
 <p>Video : <input name="file" type="file"/></p>
 <p><input type="submit" value="Subir archivo" /></p>
</form>

<script>

 function realizaProceso(titulo,descripcion,titulo_video){

    $.ajax({
     type: "POST",
     url: "insertotest.php",
     data: {t: titulo, d: descripcion, tv: titulo_video},
     beforeSend: function () {
            $("#resultado").html("Procesando, espere por favor...");
    },
    success:  function (response) {
            $("#resultado").html(response);
    }
 });
 }
</script>

 