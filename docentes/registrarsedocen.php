<!-- 
   Nombre de app: CONTROL DE ACCESO LABCOM
   Desarrollador: JULIO CESAR LUNA Y EMILIO RODRIGUEZ BARRIOS.
   Fecha de creacion: 25 DE ABRIL 2020
   Ultima fech de modificacion: 28 DE MARZO DE 2020
   Modulo o pantalla: Registro Docentes
   Copyrigth: -->
<!DOCTYPE html>
<?php
include("../conexion.php");
?>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Registrar Docente</title>
      <!--JQUERY-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <!-- Los iconos tipo Solid de Fontawesome-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
      <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
      <!-- Nuestros Estilos-->
      <link rel="stylesheet" type="text/css" href="../css/registrarsealum.css">
   </head>
   <body>
      <!-- Texto principal con los logos del tecnm -->
      <!-- TEXTO QUE IDENTIFICA LA PAGINA (TITULO) -->
      <CENTER>
         <H1>TECNM CAMPUS EL LLANO AGUASCALIENTES</H1>
      </CENTER>
      <CENTER>
         <H2>BIENVENIDO AL CENTRO DE CÓMPUTO</H2>
      </CENTER>
      <img src="../img/itel.png" width="90" style="position: absolute; top:20px; left:55px">
      <img src="../img/tecnm.png" width="90" style="position: absolute; top:20px; right:55px">
      <div class="modal-dialog text-center">
         <div class="col-sm-8 main-section">
            <div class="modal-content">
               <div class="col-12 user-img">
                  <img src="../img/nuevo.png"/>
               </div>
               <!-- Aqui comienza el fomulario-->
               <p class="titulo">Registrar sus Datos</p>
               <form action="" class="col-12" autocomplete="off" method="POST">
                  <div class="form-group" id="user-group">
                     <input name="nombred" type="text" class="form-control" placeholder="Nombre" requiered/>
                  </div>
                  <div class="form-group" id="user-group">
                     <input name="praped" type="text" class="form-control" placeholder="Primer Apellido" requiered />
                  </div>
                  <div class="form-group" id="user-group">
                     <input name="seaped" type="text" class="form-control" placeholder="Segundo Apellido" requiered/>
                  </div>
                  <div class="form-group" id="user-group">
                     <input name="materia" type="text" class="form-control" placeholder="Materia que Imparte" requiered />
                  </div>
                  <div class="form-group" id="user-group">
                     <input name="identi" type="text" class="form-control" placeholder="Numero de Empleado" requiered/>
                  </div>
                  <div class="form-group" id="contrasena-group">
                        <input name="pass" type="text" class="form-control" placeholder="Ingrese una Contraseña" required/>
                  </div>
                  <button name="registrarse" type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Registrarse</button>
               </form>
               <div class="instrucciones">
                    <p>Al hacer clic en "Registrarse" aceptas nuestras Condiciones y Política de datos.</p>
                </div>
                <a href="../index.html">Volver al Inicio</a>
            </div>
         </div>
      </div>
      
          <?php
       if($_POST){
           $n=$_POST['nombred'];
           $pa=$_POST['praped'];
           $sp=$_POST['seaped'];
           $m=$_POST['materia'];
           $num=$_POST['identi'];
           $contra=$_POST['pass'];
           
           $insertar="INSERT INTO docentes (Nombre,PApellido,SApellido,Materia,NoEmpleado,contraseña)VALUES('$n','$pa','$sp','$m','$num','$contra')";
           
           mysqli_query($con,$insertar)or die("Problemas al insertar".mysqli_error());
           echo "<H2>DATO GUARDADO</H2>";
       }
            ?>
      
   </body>
</html>