<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <?php include("main.php"); ?>
</head>
<body>
<form action="" method="post">

  <div class="formulario_pagina">

  
        <div class="columns is-centered"><!-- Para centrar los campos -->
          <div class="column is-3"><!-- Para que los campos no se vean tan amplios-->
            <label class="label">Rut Empresa</label>
            <div class="control">
              <input class="input" type="text" name="run" placeholder="Ingrese el rut de la empresa">
            </div>
          </div>
        </div>

        <div class="columns is-centered"><!-- Para centrar los campos -->
          <div class="column is-3"><!-- Para que los campos no se vean tan amplios-->
            <label class="label">Nombre de la empresa</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input is-success" type="text" name="nombre" placeholder="Ingrese el Nombre de la empresa" value="">
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
          <label class="label">Correo a la cual se la mandara la info</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input is-danger" type="email" name="correo" placeholder="Ingrese Correo" value="">
              <span class="icon is-small is-left">
              <i class="fas fa-envelope"></i>
              </span>
              <span class="icon is-small is-right">
              <i class="fas fa-exclamation-triangle"></i>
              </span>
            </div>
            <p class="help is-danger">Correo no es Valido</p>
          </div>
        </div>

        <div class="columns is-centered"><!-- Para centrar los campos -->
          <div class="column is-3"><!-- Para que los campos no se vean tan amplios-->
            <label class="label">Seleccione su Region</label>
              <div class="control">
                <div class="select">
                <select name="region">
                <option value= "Tarapacá">Tarapacá</option>
                <option value= "O'Higgins">O'Higgins</option>
                </select>
              </div>
            </div>
          </div>
        </div>


        <div class="columns is-centered"><!-- Para centrar los campos -->
          <div class="column is-3"><!-- Para que los campos no se vean tan amplios-->
            <label class="label">Comuna:</label>
            <div class="control">
              <input class="input" type="text" name="comuna" placeholder="Ingrese su Comuna">
            </div>
          </div>
        </div>

        <div class="columns is-centered"><!-- Para centrar los campos -->
          <div class="column is-3"><!-- Para que los campos no se vean tan amplios-->
            <label class="label">Mensaje</label>
            <div class="control">
              <textarea class="textarea" name="mensaje" placeholder="Adjunte su Mensaje"></textarea>
            </div>
          </div>
        </div>

        <div class="columns is-centered"><!-- Para centrar los campos -->
          <div class="column is-3"><!-- Para que los campos no se vean tan amplios-->
            <div class="control">
              <label class="checkbox">
                <input type="checkbox" name="terminos" required>
               Acepto los <a href="#">términos y condiciones.</a>
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
            <input type="submit" class="button is-link" name= "btnEnviar" value= "Enviar">
          </div>
          <div class="control">
            <a href="../index.html" class="button is-link is-light">Volver Atras uwu</a>
          </div>
        </div>
    </div>

  </div>

</form>


<?php 

if ($_POST['btnEnviar'] == "Enviar" ) {

  $cnn = conectar();

  $rut = $_POST['run'];
  $nombres = $_POST['nombre'];
  $correos = $_POST['correo'];
  $regiones = $_POST['region'];
  $comunas = $_POST['comuna'];
  $mensajes = $_POST['mensaje'];
  $condiciones = $_POST['terminos'];



  $insertar = "INSERT INTO formulario VALUES ('$rut','$nombres','$correos','$regiones','$comunas','$mensajes','$condiciones')";

 
  mysqli_query($cnn,$insertar);


  echo "<script>alert('se han ingresado los datos')</script>";

  
}






?>
    
</body>
</html>