<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link rel="icon" href="../img/log.png">
    <script src="https://kit.fontawesome.com/e7dc23b135.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="../css/form.css">
    <?php include("main.php"); ?>
    <?php error_reporting(0); ?>
</head>
<body>
<nav class="navbar is-transparent">
        <div class="navbar-brand">
          <a class="navbar-item" href="#">
          </a>
          <div class="navbar-burger" data-target="navbarExampleTransparentExample">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      
        <div id="navbarExampleTransparentExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item" href="../index.html">
              <img src="../img/log.png" alt="#">
            </a>
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="nav_btn" href="#">
                Sobre Nosotros
              </a>
                <div class="navbar-dropdown is-boxed">
                <a class="navbar-item" href="../views/about-us.html">
                  ¿Quienes somos?
                </a>
                <a class="navbar-item" href="../views/about.html">
                  Nuestro Producto
                </a>
              </div>
            </div>




          </div>
      
          <div class="navbar-end">
           <div class="navbar-item">
              <div class="field is-grouped">
                <p class="control">
                </p>
                <p class="control">
                  <a class="button is-primary" href="./formulario.php">
                    <span class="icon">
                      <i class="fa-solid fa-address-book"></i>
                    </span>
                    <span>¿Tienes Dudas? Contactanos.</span>
                    </a>
                  </p>
                </div>
              </div>
           </div>
         </div>
      </nav>
  <main>
<form action="" method="post" class="formulario">

  <div class="formulario_pagina">

  
        <div class="columns is-centered"><!-- Para centrar los campos -->
          <div class="column is-3"><!-- Para que los campos no se vean tan amplios-->
            <label class="label">Rut Empresa</label>
            <div>
            <input type="input" class="input" name="run" placeholder="Ingrese el Rut de la Empresa">
            </div>
          </div>
        </div>

        <div class="columns is-centered"><!-- Para centrar los campos -->
          <div class="column is-3"><!-- Para que los campos no se vean tan amplios-->
            <label class="label">Nombre de la Empresa</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input is-success" type="text" name="nombre" placeholder="Ingrese el Nombre de la Empresa." value="">
              <span class="icon is-small is-left">
              <i class="fas fa-user"></i>
              </span>
              <span class="icon is-small is-right">
              <i class="fas fa-check"></i>
              </span>
            </div>
          </div>
        </div>

        <div class="columns is-centered"><!-- Para centrar los campos -->
          <div class="column is-3"><!-- Para que los campos no se vean tan amplios-->
          <label class="label">Correo al cual se enviará la información</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input is-success" type="email" name="correo" placeholder="Ingrese el correo electrónico." value="">
              <span class="icon is-small is-left">
              <i class="fas fa-envelope"></i>
              </span>
              <span class="icon is-small is-right">
              <i class="fas fa-check"></i>
              </span>
            </div>
          </div>
        </div>

        <div class="columns is-centered"><!-- Para centrar los campos -->
          <div class="column is-3"><!-- Para que los campos no se vean tan amplios-->
            <label class="label">Seleccione su región</label>
              <div class="control">
                <div class="select">
                <select name="region">
                <option value= "Arica-Parinacota">Arica-Parinacota</option>
                <option value= "Tarapaca">Tarapaca</option>
                <option value= "Antofagasta">Antofagasta</option>
                <option value= "Atacama">Atacama</option>
                <option value= "Coquimbo">Coquimbo</option>
                <option value= "Valparaiso">Valparaiso</option>
                <option value= "Metropolitana">Metropolitana</option>
                <option value= "O'Higgins">O'Higgins</option>
                <option value= "Maule">Maule</option>
                <option value= "Ñuble">Ñuble</option>
                <option value= "Bio-Bio">Bio-Bio</option>
                <option value= "Araucania">Araucania</option>
                <option value= "Los Rios">Los Rios</option>
                <option value= "Los Lagos">Los Lagos</option>
                <option value= "Aysen">Aysen</option>
                <option value= "Magallanes- Antartica Chilena">Magallanes- Antartica Chilena</option>
                
                </select>
              </div>
            </div>
          </div>
        </div>


        <div class="columns is-centered"><!-- Para centrar los campos -->
          <div class="column is-3"><!-- Para que los campos no se vean tan amplios-->
            <label class="label">Comuna:</label>
            <div class="control">
              <input class="input" type="text" name="comuna" placeholder="Ingrese su comuna.">
            </div>
          </div>
        </div>

        <div class="columns is-centered"><!-- Para centrar los campos -->
          <div class="column is-3"><!-- Para que los campos no se vean tan amplios-->
            <label class="label">Mensaje</label>
            <div class="control">
              <textarea class="textarea" name="mensaje" placeholder="Adjunte su mensaje."></textarea>
            </div>
          </div>
        </div>

        <div class="columns is-centered"><!-- Para centrar los campos -->
          <div class="column is-3"><!-- Para que los campos no se vean tan amplios-->
            <div class="control">
              <label class="checkbox">
                <input type="checkbox" name="terminos" required>
               Acepto los <a href="../views/terms-and-conditions.html">Términos y condiciones.</a>
              </label>
            </div>
          </div>
        </div>  
        <br><br>
        <!-- Falta centrar esta parte correctamente. -->
        <!-- ok bb -->
    <div class="columns is-centered">
         <div class="columns is-centered">
          <div class="control">
            <input type="submit" class="button is-success" name= "btnEnviar" value= "Enviar">&nbsp;&nbsp;&nbsp;&nbsp;
          </div>
          <br>
          <br><br><br><br><br><br><br>
        </div>
    </div>

  </div>
  

</form>
</main>
<br><br>
        <footer class="footer has-background-primary-dark">
      <div class="footer-final">
        <h4>Donde Estamos?</h4>
        <h5>Region: O'Higgins</h5>
        <h5>Comuna: Rancagua</h5>
        <h5>Direccion: C. Cuevas 70</h5>

      </div>

      &nbsp;&nbsp;&nbsp;&nbsp;<br>




      <div class="footer-final">
        <p >
          <strong class="pack">Packify</strong> By Grupo7
          
          <h4>Todos los Derechos Reservados ©</h4>
          
        </p>

      </div>
      &nbsp;&nbsp;&nbsp;&nbsp;

      <div class="footer-final">
       <h4>Soporte</h4>
          <h5>Correo: Grupo7@gmail.com</h5>
          <h5>Telefono: +569587423</h5>
          <h5>Atencion: 24/7</h5>
     
   
      </div>

      <div class="footer-final">
        <h4 class="Redes-Sociales">Redes Sociales</h4>
         <a href="https://www.instagram.com/aiep_rancagua/?hl=es-la" class="ig"><i class="fa-brands fa-instagram"> Instagram</i></a>
         <br>
         <a href="https://www.facebook.com/TvOhiggins" class="face"><i class="fa-brands fa-facebook"> Facebook</i></a>
         <br>
        <a href="https://twitter.com/elonmusk" class="twi"><i class="fa-brands fa-twitter"> Twitter</i></a>

      </div>



      
      </div>


      
    </footer>


<?php 

if ($_POST['btnEnviar'] == "Enviar" ) {

  //aqui hacemos la conexion a la BD llamando a $cnn que se encuentra en main.php
  $cnn = conectar();

  //en esta parte se rescata el valor que ingresa el usuario mediante el name , asi creando diferentes variables que contengan el metodo POST
  $rut = $_POST['run'];
  $nombres = $_POST['nombre'];
  $correos = $_POST['correo'];
  $regiones = $_POST['region'];
  $comunas = $_POST['comuna'];
  $mensajes = $_POST['mensaje'];
  $condiciones = $_POST['terminos'];



  //aqui creamos la sentencia sql que ingresara los datos rescatado por el usuario y los almacenara directamente en la base de datos
  $insertar = "INSERT INTO formulario_contacto VALUES ('$rut','$nombres','$correos','$regiones','$comunas','$mensajes','$condiciones')";

 
  $rs = mysqli_query($cnn,$insertar);

  if($rs)
  {
    echo "<script>alert('Solicitud Ingresada Exitosamente Pronto Lo Contactaremos...')</script>";
  }
  else
  {
    echo "<script>alert('Error.')</script>";
  }


}


?>



</body>
</html>