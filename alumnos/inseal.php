<!-- 
Nombre de app: CONTROL DE ACCESO LABCOM
Desarrollador: JULIO CESAR LUNA Y EMILIO RODRIGUEZ BARRIOS.
Fecha de creacion: 25 DE FEBRERO 2020
Ultima fech de modificacion: 28 DE MARZO DE 2020
Modulo o pantalla: INDEX
Copyrigth: -->
<?php
include("../conexion.php");
?>
   <html>
    <head>
        <title>Iniciar Sesion</title>
        <meta charset="utf-8"/>
        
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
        <!-- TEXTO QUE IDENTIFICA LA PAGINA (TITULO) -->
	<CENTER><H1>TECNM CAMPUS EL LLANO AGUASCALIENTES</H1></CENTER>
	<CENTER><H2>BIENVENIDO AL CENTRO DE CÓMPUTO</H2></CENTER>
       <!-- Texto principal con los logos del tecnm -->
       <img src="../img/itel.png" width="90" style="position: absolute; top:20px; left:55px">
	    <img src="../img/tecnm.png" width="90" style="position: absolute; top:20px; right:55px">
       
        <div class="modal-dialog text-center">
            <div class="col-sm-8 main-section">
                <div class="modal-content">
                  <div class="col-12 user-img">
                      <img src="../img/avatar.png"/>
                  </div> 
                  
                  <!-- IDENTIFICACION DEL FORMULARIO-->
                  <p class="titulo">Inicio de Sesión</p>
                  <form action="" class="col-12" autocomplete="off" method="POST">
                     <div class="form-group" id="user-group">
                        <!--REGISTRO DEL NOMBRE-->
                        
                     <input name="nuemc" type="text" class="form-control" placeholder="N° de Control"/>
                     </div>
                     <div class="form-group" id="user-group">
                        <!--REGISTRO DEL LABORATORIO-->
                         <H8>Seleccione Laboratorio</H8>
                         <select name="laboratorio">
                             <option value="1">LAB 1</option>
                             <option value="2">LAB 2</option>
                         </select> 
                     </div>
                     <div class="form-group" id="user-group">
                        <!--REGISTRO DE LA ACTIVIDAD-->
                         <input name="actividad"type="text" class="form-control" placeholder="Actividad a realizar"/>
                     </div>
                     <div class="form-group" id="contrasena-group">
                        <!--REGISTRO DE LA CONTRASEÑA-->
                         <input name="contra"type="password" class="form-control" placeholder="Contraseña"/>
                     </div>
                      <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar</button>
                  </form>
                  <div class="instrucciones">
                      <p>Al hacer clic en "Registrarse" aceptas nuestras Condiciones y Política de datos.</p>
                  </div>
                  <div class="col-12 registrarse">
                      <p>¿No tienes cuenta?</p>
                      <!--BOTON PARA REGISTRARSE-->
                      <a href="registrarse.php">Registrarse</a>
                       <br>
                       <!--BOTON PARA REGRESAR A LA PAGINA PRINCIPAL-->
                      <a href="../index.html">Volver al Inicio</a>

                  </div>
                </div>
            </div>
        </div> 
        
             <?php
          if($_POST){
              $ne=$_POST['nuemc'];
              $lab=$_POST['laboratorio'];
              $act=$_POST['actividad'];
              $co=$_POST['contra'];
              
              $guard="INSERT INTO inisesion (NControl,Lab,Actividad,ContraseñaAlum)VALUES('$ne','$lab','$act','$co')";
              
               mysqli_query($con,$guard)or die("Problemas al insertar".mysqli_error($con));
           echo "<H2>DATO GUARDADO</H2>";
            }
          ?>
        
        
    </body>
</html>