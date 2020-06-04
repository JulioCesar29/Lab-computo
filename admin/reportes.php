<?php
include("../conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reportes</title>
    
     <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <!-- Nuestros Estilos-->
    <link rel="stylesheet" type="text/css" href="../css/inseal.css">
</head>
<body>
   
   <div class="inicial">
    <!-- Texto principal con los logos del tecnm -->
      <img src="../img/itel.png" width="90" style="position: absolute; top:20px; left:55px">
      <img src="../img/tecnm.png" width="90" style="position: absolute; top:20px; right:55px">
    <!-- TEXTO QUE IDENTIFICA LA PAGINA (TITULO) -->
      <CENTER><H1>TECNM CAMPUS EL LLANO AGUASCALIENTES</H1></CENTER>
      <CENTER><H2>BIENVENIDO AL CENTRO DE CÓMPUTO</H2></CENTER>  
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
   
   
    <form action="" method="POST">
    
    <CENTER>
  
    <textarea name="desc" rows="4" cols="40" placeholder="Escriba el reporte"></textarea>

  
  <p>
    <input type="submit" value="Enviar">
  </p>
  <center><a href="../index.html">Volver al Inicio</a></center>
        <center><a href="admin.php">Volver</a></center>
  </CENTER>
   <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</form>
    
    <?php
       if($_POST){
           $t=$_POST['desc'];
           
           $insertar="INSERT INTO descreportes (Descripcion)VALUES('$t')";
           
           mysqli_query($con,$insertar)or die("Problemas al insertar".mysqli_error());
           echo "<H2>DATO GUARDADO</H2>";
       }
            ?>
    
</body>
</html>