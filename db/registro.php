<?php
?>

<form action="insertar.php" method="post" enctype="multipart/form-data">
 <p>Nombre: <input type="text" name="nombre" /></p>
 <p>Apellidos: <input type="text" name="apellidos" /></p>
 <p>Telefono: <input type="number" name="telefono" /></p>
 <p>Email: <input type="mail" name="email" /></p>
 <p>Pais: <input type="text" name="pais" /></p>
 <p>Ciudad: <input type="text" name="ciudad" /></p>
 <p>CP: <input type="number" name="cp" /></p>
 <p>Salario: <input type="range" name="salario" /></p>
 <p>Oficio : <input type="text" name="oficio" /></p>
 <p><input type="submit" value="Subir archivo" /></p>
</form>