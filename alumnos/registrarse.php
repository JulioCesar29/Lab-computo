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
    <meta charset="utf-8" />

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
    <!-- Logos y Titulos-->
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
                    <img src="../img/nuevo.png" />
                </div>

                <!-- Aqui comienza el fomulario de registro-->

                <p class="titulo">Registre sus datos</p>
                <form class="col-12" method="POST" autocomplete="off">
                    <div class="form-group" id="user-group">
                       <!-- REGISTRAR SU NOMBRE -->
                        <input name="nombre" type="text" class="form-control" placeholder="Nombre" requiered/>
                    </div>
                    <div class="form-group" id="user-group">
                       <!-- REGISTRAR SU APELLIDO -->
                        <input name="prape" type="text" class="form-control" placeholder="Primer Apellido" />
                    </div>
                    <div class="form-group" id="user-group">
                        <input name="seape" type="text" class="form-control" placeholder="Segundo Apellido" />
                    </div>
                    <div class="form-group" id="user-group">
                        <p>Seleccione su Carrera:</p>
                        <!-- SELECCIONAR SU CARRERA -->
                        <select name="carrera">
                            <option value="1">Tics</option>
                            <option value="2">Biotecnología</option>
                            <option value="3">Agronomía</option>
                            <option value="4">Adminsitración</option>
                            <option value="5">Gestión Empresarial</option>
                            <option value="6">Innovación Agrícola</option> 
                        </select>
                    </div>
                    <p>Que semestre cursa:</p>
                    <select name="grado">
                       <!-- SELECCIONAR SU GRADO -->
                        <option value="1">1°</option>
                        <option value="2">2°</option>
                        <option value="3">3°</option>
                        <option value="4">4°</option>
                        <option value="5">5°</option>
                        <option value="6">6°</option>
                        <option value="7">7°</option>
                        <option value="8">8°</option>
                        <option value="9">9°</option>
                    </select>
                    <p>Selecione su grupo:</p>
                    <select name="grupo">
                       <!-- SELECCIONAR SU GRUPO -->
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option value="c">C</option>
                        <option value="d">D</option>
                        <option value="e">E</option>
                    </select>
                    <div class="form-group" id="user-group">
                       <!-- INGRESAR SU NUMERO DE CONTROL -->
                        <input name="ncontrol" type="varchar" class="form-control" placeholder="N° de Control" required/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                       <!-- REGISTRAR UNA CONTRASEÑA -->
                        <input name="contra" type="password" class="form-control" placeholder="Contraseña" required/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Repita su Contraseña" required/>
                    </div>
                    <button name="registrarse" type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Registrarse</button>
                </form>
                <div class="instrucciones">
                    <p>Al hacer clic en "Registrarse" aceptas nuestras Condiciones y Política de datos.</p>
                </div>
                <!-- BOTON QUE REGRESA A LA PAGINA PRINCIPAL -->
                <a href="../index.html">Volver al Inicio</a>
            </div>
        </div>
    </div>
        
        <?php
            if($_POST){
           $n=$_POST['nombre'];
           $pa=$_POST['prape'];
           $sp=$_POST['seape'];
           $c=$_POST['carrera'];
           $g=$_POST['grado'];
           $gr=$_POST['grupo'];
           $nco=$_POST['ncontrol'];
           $cont=$_POST['contra'];
        
            $insertar="INSERT INTO alumnos (Nombre,PApellido,SApellido,Carrera,Semestre,Grupo,NoControl,Contrasena) VALUES ('$n','$pa','$sp','$c','$g','$gr','$nco','$cont')";
                
            mysqli_query($con,$insertar)or die("Problemas al insertar".mysqli_error($con));
           echo "<H2>DATO GUARDADO</H2>";
            }
        ?>
        
        
</body>
</html>