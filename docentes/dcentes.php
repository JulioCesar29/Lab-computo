<!-- 
   Nombre de app: CONTROL DE ACCESO LABCOM
   Desarrollador: JULIO CESAR LUNA Y EMILIO RODRIGUEZ BARRIOS.
   Fecha de creacion: 25 DE ABRIL 2020
   Ultima fech de modificacion: 28 DE MARZO DE 2020
   Modulo o pantalla: Registro Docentes
   Copyrigth: -->
<?php
include("../conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Iniciar Sesión Docente</title>
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
      <CENTER>
         <H1>TECNM CAMPUS EL LLANO AGUASCALIENTES</H1>
      </CENTER>
      <CENTER>
         <H2>BIENVENIDO AL CENTRO DE CÓMPUTO</H2>
      </CENTER>
      <!-- Texto principal con los logos del tecnm -->
      <img src="../img/itel.png" width="90" style="position: absolute; top:20px; left:55px">
      <img src="../img/tecnm.png" width="90" style="position: absolute; top:20px; right:55px">
      <div class="modal-dialog text-center">
         <div class="col-sm-8 main-section">
            <div class="modal-content">
               <div class="col-12 user-img">
                  <img src="../img/avatar.png" />
               </div>
               
               
               <p class="titulo">Inicio de Sesión Docentes</p>
               <form action="" class="col-12" autocomplete="off" method="POST">
                  <div class="form-group" id="user-group">
                    <!-- INGRESAR SU NOMBRE DE USUARIO -->
                     <input name="nuem"type="text" class="form-control" placeholder="N° de Empleado" />
                  </div>
                  <div class="form-group" id="user-group">
                        <H8>Seleccione Laboratorio</H8>
                         <select name="laboratorio">
                             <option value="1">LAB 1</option>
                             <option value="2">LAB 2</option>
                         </select>                       
                     </div>
                  <div class="form-group" id="contrasena-group">
                    <!-- INGRESAR SU CONTRASEÑA PARA ACCEDER -->
                     <input name="contra" type="password" class="form-control" placeholder="Contraseña" />
                  </div>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Ingresar</button>
               </form>
               <div class="instrucciones">
                  <p>Al hacer clic en "Registrarse" aceptas nuestras Condiciones y Política de datos.</p>
               </div>
               <div class="col-12 registrarse">
                  <p>¿No tienes cuenta?</p>
                  <!-- BOTON QUE TE MANDA A UNA PAGINA PARA REGISTRARSE -->
                  <a href="registrarsedocen.php">Registrarse</a>
                  
               </div>
               <!--BOTON PARA REGRESAR A LA PAGINA PRINCIPAL-->
                      <a href="../index.html">Volver al Inicio</a>
            </div>
         </div>
      </div>
         
          <?php
          if($_POST){
              $ne=$_POST['nuem'];
              $lab=$_POST['laboratorio'];
              $co=$_POST['contra'];
              
              $guard="INSERT INTO sesiondoce (NEmpleado,Lab,Dcontraseña)VALUES('$ne','$lab','$co')";
              
               mysqli_query($con,$guard)or die("Problemas al insertar".mysqli_error());
           echo "<H2>DATO GUARDADO</H2>";
            }
          ?>
      
      
   </body>
</html>