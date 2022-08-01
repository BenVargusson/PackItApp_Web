<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>

  <div class="formulario_pagina">

  
        <div class="columns is-centered"><!-- Para centrar los campos -->
          <div class="column is-3"><!-- Para que los campos no se vean tan amplios-->
            <label class="label">Rut Empresa</label>
            <div class="control">
              <input class="input" type="text" placeholder="Ingrese el rut de la empresa">
            </div>
          </div>
        </div>

        <div class="columns is-centered"><!-- Para centrar los campos -->
          <div class="column is-3"><!-- Para que los campos no se vean tan amplios-->
            <label class="label">Nombre de la empresa</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input is-success" type="text" placeholder="Ingrese el Nombre de la empresa" value="">
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
              <input class="input is-danger" type="email" placeholder="Ingrese Correo" value="">
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
                <select>
                <option>Tarapacá</option>
                <option>O'Higgins</option>
                </select>
              </div>
            </div>
          </div>
        </div>


        <div class="columns is-centered"><!-- Para centrar los campos -->
          <div class="column is-3"><!-- Para que los campos no se vean tan amplios-->
            <label class="label">Comuna:</label>
            <div class="control">
              <input class="input" type="text" placeholder="Ingrese su Comuna">
            </div>
          </div>
        </div>

        <div class="columns is-centered"><!-- Para centrar los campos -->
          <div class="column is-3"><!-- Para que los campos no se vean tan amplios-->
            <label class="label">Mensaje</label>
            <div class="control">
              <textarea class="textarea" placeholder="Adjunte su Mensaje"></textarea>
            </div>
          </div>
        </div>

        <div class="columns is-centered"><!-- Para centrar los campos -->
          <div class="column is-3"><!-- Para que los campos no se vean tan amplios-->
            <div class="control">
              <label class="checkbox">
                <input type="checkbox">
               Acepto los <a href="#">términos y condiciones.</a>
              </label>
            </div>
          </div>
        </div>  

        <div class="columns is-centered"><!-- Para centrar los campos -->
          <div class="column is-3"><!-- Para que los campos no se vean tan amplios-->
            <div class="control">
              <label class="radio">
                <input type="radio" name="question">
                Si
                </label>
                <label class="radio">
                <input type="radio" name="question">
                No
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
            <button class="button is-link" >Enviar Formulario</button>
          </div>
          <div class="control">
            <a href="../index.html" class="button is-link is-light">Volver Atras uwu</a>
          </div>
        </div>
    </div>

  </div>
    
</body>
</html>