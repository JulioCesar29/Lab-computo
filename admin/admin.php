<!-- 
Nombre de app: CONTROL DE ACCESO LABCOM
Desarrollador: JULIO CESAR LUNA Y EMILIO RODRIGUEZ BARRIOS.
Fecha de creacion: 25 DE FEBRERO 2020
Ultima fech de modificacion: 28 DE MARZO DE 2020
Modulo o pantalla: INDEX
Copyrigth: -->
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADMINISTRADOR</title>
    
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
    <div class="separador"></div>
    
    <div class="botones">
        <center>
        <!-- ACCESO A LOS REPORTES DEL ADMINISTRADOR-->
       <H1>Reportes <a href="reportes.php" button name="reportes" id="repor"><img src="../img/re.png" width="180" height="150" rigth></a></H1>
               <H1>Inventario <a href="Inventarioss.php" button name="inventario" id="repor"><img src="../img/inventario.png" width="160" height="140" rigth></a></H1>
               <H1>Modificación de usuarios <a href="http://localhost/phpmyadmin/db_structure.php?server=1&db=laboratorio" target="_blank" button name="configuracion" id="repor"><img src="../img/Conf.png" width="150" height="150" right></a></H1> 

    
        </center>
    </div>
    <!--BOTON PARA REGRESAR A LA PAGINA PRINCIPAL-->
                     <center><a href="../index.html">Volver al Inicio</a></center> 
</body>
</html>