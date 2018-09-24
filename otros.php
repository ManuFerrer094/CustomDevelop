<?php
require_once 'db/funcionesPhp.php';
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<head>
<link rel="stylesheet" type="text/css" href="menu.css">
</head> 

<!--BANNER-->
<div class="jumbotron text-center" style="background-image: url('<?php selecionarImagen('127.0.0.1','root','','cdev','PHP');?>')">
  <h1>Manuel Ferrer García </h1>

  <div class="container">
         <img class="img-responsive" src="<?php selecionarImagen('127.0.0.1','root','','cdev','PHP');?>" alt="TRACA" style="width:100px;height:100px;">
</div>
  <p>Programador multiplataforma</p>
</div>
<!--BANNER-->
<div class ="cajaprincipal" id="Fondototal">
    <div class="row">
    <!--Banner Lateral-->
        <div class="Banner Lateral col-lg-4" id="fondobotones"  >

            <div class="col-lg-6">
            <button type="button" class="btn-group-vertica"  id= "boton00" onclick="inicio('videojuegos.php')"><i class="fas fa-gamepad">Videojuegos</i></button>
            </div>
            <div class="col-lg-6">
            <button type="button" class="btn-group-vertica" id= "boton00" onclick="inicio('aplicaciones.php')"> <i class="fas fa-mobile-alt">Aplicaciones</i></button>
            </div>
            <div class="col-lg-6">
            <button type="button" class="btn-group-vertica"  id= "boton00" onclick="inicio('paginasweb.php')"><i class="fas fa-desktop">Paginas Web</i></button>
            </div>
            <div class="col-lg-6">
            <button type="button" class="btn-group-vertica"  id= "boton00" onclick="inicio('otros.php')"> <i class="fas fa-random"> Otras Disciplinas</i></button>
            </div>

            
        </div>


        <!--Banner Lateral-->
        <!--Caja de Videos-->
             <div class="col-lg-4" id=fondovideo  >
             <video width="512" height="512" controls>
             <source src="recursos/video/Trailer_02.mp4" type="video/mp4">
               
             </video>
            </div>
  
        <!--Caja de Videos-->
        <!--Caja de texto-->
        <div class="col-lg-4" id=fondotexto >
            <h1 class = "col-lg-12" id=titulotexto>Titulo</h1>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            <ul>
            <li>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </li>
            <li>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </li>
            <li>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </li>
            <li>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </li>
            <li>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </li>
            </ul>
        </div>

        <!--Caja de texto-->
           
                    
    </div>
</div>


<script language="javascript">

function inicio(direccion){
window.location.href=direccion;
}
</script> 
