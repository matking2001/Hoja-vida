<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="contenedor">
      <div class="header">
        <div class="nombre"><label class="label" for="">MATEO</label></div>
        <div class="nav">
          <ul>
            <li><a href="acerca-mi.html">ACERCA DE MI</a></li>
            <li><a href="servicio.html">SERVICIOS</a></li>
            <li><a href="portafolio.html">PORTAFOLIO</a></li>
            <li><a href="#f-contacto">CONTACTO</a></li>
          </ul>
        </div>
      </div>
      <div class="anuncio">
        <table width="388" align="left">
          <tbody>
            <tr>
              <td
                width="352"
                style="text-align: left; font-size: 30px; color: #ffffff;"
              >
                Bienvenidos
              </td>
            </tr>
            <tr>
              <td style="text-align: left; font-size: 40px; color: #f4f4f4;">
                Soy Mateo Balza
              </td>
            </tr>
            <tr>
              <td
                height="38"
                style="text-align: left; font-size: 30px; color: #ffffff;"
              >
                Desarrollador web
              </td>
            </tr>
          </tbody>
        </table>
       <div class="perfil"><img src="imagenes/fot-perfil.jpg"/ width="200px" height="220px"></div>
      </div> 
      <section id="f-contacto">
          <div class="c-contacto">
            <div class="contacto">
              <label id="label"for="">CONTACTO</label>
              <form class="formulario" method="POST">
                <label class="label" for="">ID:</label>
                <input  id="d1" class="dato1" type="number" name="d1" min="0" pattern="[0-9]{11}" required autofocus onpaste="return false">
                <br>
                <label class="label" for="">Nombre: </label>
                <input  id="nombre" class="dato2" type="text" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúčšžûüųūÿýżźñçÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,20}" maxlength="30" size="30" name="d2" required onkeypress="return sololetras(event)" onpaste="return false">
                <br>
                <label class="label" for="">Correo: </label>
                <input  id="d3" class="dato3" type="email" name="d3" onpaste="return false">
                <br>
                <label class="label" for="">Servicios: </label>
                <select class="dato4" name="d4" id="" required>
                  <option value="Responsive">Curso Responsive</option>
                  <option value="PHP">Curso PHP</option>
                  <option value="Angular">Curso Angular</option>
                  <option value="Master desarrollo web">Master Desarrollo web</option>
                </select>
                <br>
                <label class="label l5" for="">Mensaje:</label>
                <input  id="d4" type="text" class="dato5" name="d5" required onpaste="return false">
                <br>
                <input type="submit" class="boton" name="validar" value="Enviar">
                
              </form>
              <input class="boton-limpiar" type="button" value="Limpiar" onclick="borrar()">
            </div>
          </div>
              
      </section> 
      <!--<div class="c-contacto">
        <div class="contacto">
          <label id="label"for="">CONTACTO</label>
          <form class="formulario" method="POST">
            <label class="label" for="">ID:</label>
            <input class="dato1" type="number" name="d1" min="0" pattern="[0-9]{11}" required autofocus>
            <br>
            <label class="label" for="">Nombre: </label>
            <input class="dato2" type="text" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúčšžûüųūÿýżźñçÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,20}" maxlength="30" size="30" name="d2" required>
            <br>
            <label class="label" for="">Correo: </label>
            <input class="dato3" type="email" name="d3">
            <br>
            <label class="label" for="">Servicios: </label>
            <select class="dato4" name="d4" id="" required>
              <option value="Responsive">Curso Responsive</option>
              <option value="PHP">Curso PHP</option>
              <option value="Angular">Curso Angular</option>
              <option value="Master desarrollo web">Master Desarrollo web</option>
            </select>
            <br>
            <label class="label l5" for="">Mensaje:</label>
            <input type="text" class="dato5" name="d5" required>
            <br>
            <input type="submit" class="boton" name="validar" value="Enviar">
          </form>
        </div>
      </div>-->
      <footer class="page-footer font-small blue pt-4">Hecho por Mateo Balza</footer>
    </div>
      

    <?php

      include('insertar.php');

    ?>

    <script src="main.js"></script>

  </body>
</html>
