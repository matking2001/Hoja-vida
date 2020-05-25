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
            <li><a href="#">ACERCA DE MI</a></li>
            <li><a href="#">SERVICIOS</a></li>
            <li><a href="#">PORTAFOLIO</a></li>
            <li><a href="#">CONTACTO</a></li>
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
      </div>
      <div class="acerca-mi">
        <div>
          <label>ACERCA DE MI</label>
        </div>
        <table width="956" height="215">
          <tbody>
            <tr>
              <td
                width="372"
                height="56"
                style="font-size: 23px; text-align: center;"
              >
                <strong>Perfil</strong>
              </td>
              <td width="239" style="font-size: 23px; text-align: center;">
                <strong>Cursos</strong>
              </td>
              <td width="329" style="text-align: center; font-size: 23px;">
                <strong> Experiencia</strong>
              </td>
            </tr>
            <tr>
              <td style="font-size: 15px;">
                <dl>
                  <dt>
                    Soy un aprendiz de análisis y desarrollo de sistemas de
                    información cuya formación se lleva acabo en Barranquilla,
                    mi enfoque principal es el desarrollo web, me gusta todo lo
                    que tiene que ver con la parte del Frontend, cuento con
                    conocimientos en HTML, CSS, SASS, POO, PHP, Git y GitHub
                    además de tener un dominio básico del ingles.
                  </dt>
                </dl>
              </td>
              <td>
                <ul>
                  <li><strong>Arquitectura de computadores.</strong></li>
                  <li><strong>Git y Github.</strong></li>
                  <li><strong>English do work.</strong></li>
                  <li><strong>Habilidades para la vida</strong></li>
                  <li><strong>HTML y CSS.</strong></li>
                  <li><strong>Programación basica</strong></li>
                </ul>
              </td>
              <td>
                <dl>
                  <dt>
                    Cuento con experencia laboral en el area de desarrollo web
                    en la empresa crazySOFT en la cual laboré durante más de dos
                    años, donde desarrollé mis labores con la mayor seriedad
                    liderando proyectos como AIM-Less el reconocido generador de
                    boletines virtuales que revolucionó a los colegios de
                    Barranquilla.
                  </dt>
                </dl>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="c-servicio">
        <div class="servicios">
          <label for="">SERVICIOS</label>
          <div
            id="carouselExampleControls"
            class="carousel slide"
            data-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  id="img"
                  src="imagenes/img1.jpg"
                  class="d-block w-100"
                  alt="..."
                />
                <p id="p">
                  Contamos con uno de los cursos de html y css desde cero no
                  necesitas tener algún conocimiento previo y con los mejores
                  precios del mercado, con curso que van desde los 5 dolares
                  hasta los 50 dolares.
                </p>
              </div>
              <div class="carousel-item">
                <img
                  id="img"
                  src="imagenes/img2.jpg"
                  class="d-block w-100"
                  alt="..."
                />
                <p id="p">
                  Maqueta aplicaciones con diseño web adaptable. Adapta tus
                  sitios para que funcionen en cualquier pantalla, dispositivo y
                  resolución con HTML5 y CSS3 y genera la mejor experiencia para
                  tus usuarios con Responsive Design, solo es que te lo imagines
                  y crees.
                </p>
              </div>
              <div class="carousel-item">
                <img
                  id="img"
                  src="imagenes/img3.png"
                  class="d-block w-100"
                  alt="..."
                />
                <p id="p">
                  Tenemos en nuestro catalogo una gran variedad de cursos
                  enfocados al desarrollo Frontend, asi que si aun no te has
                  decido porque rama irte puedes echar un vistazo a nuestra
                  pagina www.matSOFT.com.
                </p>
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#carouselExampleControls"
              role="button"
              data-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExampleControls"
              role="button"
              data-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>

      <div class="c-portafolio">
        <div class="portafolio">
          <label for="">PORTAFOLIO</label>
          <div
            id="carouselExampleIndicators"
            class="carousel slide"
            data-ride="carousel"
          >
            <ol class="carousel-indicators">
              <li
                data-target="#carouselExampleIndicators"
                data-slide-to="0"
                class="active"
              ></li>
              <li
                data-target="#carouselExampleIndicators"
                data-slide-to="1"
              ></li>
              <li
                data-target="#carouselExampleIndicators"
                data-slide-to="2"
              ></li>
              <li
                data-target="#carouselExampleIndicators"
                data-slide-to="3"
              ></li>
              <li
                data-target="#carouselExampleIndicators"
                data-slide-to="4"
              ></li>
              <li
                data-target="#carouselExampleIndicators"
                data-slide-to="4"
              ></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imagenes/img5.jpg" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="imagenes/img6.jpg" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="imagenes/img15.png" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="imagenes/img16.jpg" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="imagenes/img17.png" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="imagenes/img18.png" class="d-block w-100" alt="..." />
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      
      <div class="c-contacto">
        <div class="contacto">
          <label id="label"for="">CONTACTO</label>
          <form class="formulario" method="POST">
            <label class="label" for="">ID:</label>
            <input class="dato1" type="text" name="id">
            <br>
            <label class="label" for="">Nombre: </label>
            <input class="dato2" type="text" name="" name="nombre">
            <br>
            <label class="label" for="">Correo: </label>
            <input class="dato3" type="email" name="correo">
            <br>
            <label class="label" for="">Servicios: </label>
            <select class="dato4" name="curso" id="">
              <option value="Responsive">Curso Responsive</option>
              <option value="PHP">Curso PHP</option>
              <option value="Angular">Curso Angular</option>
              <option value="Master desarrollo web">Master Desarrollo web</option>
            </select>
            <br>
            <label class="label l5" for="">Mensaje:</label>
            <textarea class="dato5" name="" id="" cols="50" rows="5" name="mensaje"></textarea>
            <br>
            <input type="submit" class="boton" name="validar" value="Enviar">
          </form>
        </div>
      </div>
      <footer class="page-footer font-small blue pt-4">Hecho por Mateo Balza</footer>
    </div>
      

    <?php

      include('insertar.php');

    ?>
  </body>
</html>
