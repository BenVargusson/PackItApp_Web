<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link rel="icon" href="../Imagenes/Icono.jpeg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php include("main.php"); ?>
    <?php error_reporting(0); ?>
</head>
<body>
<form action="" method="post">

  <div class="formulario_pagina">

  
        <div class="columns is-centered"><!-- Para centrar los campos -->
          <div class="column is-3"><!-- Para que los campos no se vean tan amplios-->
            <label class="label">Rut Empresa</label>
            <div class="control">
              <input class="input" type="text" name="run" placeholder="Ingrese el Rut de la Empresa.">
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
              <input class="input is-danger" type="email" name="correo" placeholder="Ingrese el correo electrónico." value="">
              <span class="icon is-small is-left">
              <i class="fas fa-envelope"></i>
              </span>
              <span class="icon is-small is-right">
              <i class="fas fa-exclamation-triangle"></i>
              </span>
            </div>
            <p class="help is-danger">El correo no es válido.</p>
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
    <div  class="columns is-centered">
         <div class="columns is-vcentered">
          <div class="control">
            <input type="submit" class="button is-link" name= "btnEnviar" style="padding-right: 20px;" value= "Enviar">&nbsp;&nbsp;&nbsp;&nbsp;
          </div>
          <br>
          <br>
          <div class="control">
            <a href="../index.html" class="btn btn-success" style="padding-right: 20px;">Regresar</a>
          </div>
        </div>
    </div>

  </div>

</form>


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
  $insertar = "INSERT INTO formulario VALUES ('$rut','$nombres','$correos','$regiones','$comunas','$mensajes','$condiciones')";

 
  mysqli_query($cnn,$insertar);


  echo "<script>alert('Se ha Enviado su Formulario Pronto Estaremos en contacto....')</script>";

  
}






?>
    
</body>
</html>