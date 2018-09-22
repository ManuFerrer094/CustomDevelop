
<?php
require_once 'db/funcionesPhp.php';
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<style>
    #boton00
    {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 30px 30px;
        text-align: center;
        text-decoration-line: underline;
        text-decoration-style: double;
        display: inline-block;
        font-size: 16px;
        margin: 40px 40px 160px 40px;
        cursor: pointer;
    }
</style>
<!--BANNER-->
<div class="jumbotron text-center">
  <h1>Manuel Ferrer García </h1>

  <div class="container">
         <img class="img-responsive" src="<?php selecionarImagen('127.0.0.1','root','','cdev','PHP');?>" alt="TRACA" style="width:100px;height:100px;">
</div>
  <p>Programador multiplataforma</p>
</div>
<!--BANNER-->
<div>
    <div class="row">
    <!--Banner Lateral-->
        <div class="Banner Lateral col-lg-4">

            <div class="col-lg-6">
            <button type="button" class="btn-group-vertica" id= "boton00"><i class="fas fa-gamepad">Videojuegos</i></button>
            </div>
            <div class="col-lg-6">
            <button type="button" class="btn-group-vertica" id= "boton00"> <i class="fas fa-mobile-alt">Aplicaciones</i></button>
            </div>

            <div class="col-lg-6">
            <button type="button" class="btn-group-vertica" id= "boton00">Primary</button>
            </div>

            <div class="col-lg-6">
            <button type="button" class=" btn-group-vertica" id= "boton00">Primary</button>
            </div>
        </div>
        <!--Banner Lateral-->
        <!--Caja de Videos-->
             <div class="Banner Lateral col-lg-8">
             <video width="620" height="412" controls>
                <source src="movie.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
             </video>
  
        <!--Caja de Videos-->
           
                    
    </div>
</div>


