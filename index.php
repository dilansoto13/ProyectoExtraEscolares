<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/CSSHeader.css"/>
    <link rel="stylesheet" href="CSS/CSSModalIngreso.css"/>
    
    <link rel="stylesheet" href="CSS/CSSBanner.css"/>
    <link rel="stylesheet" href="CSS/CSSActivities.css"/>
    <link rel="stylesheet" href="CSS/CSSCommentBox.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap"
      rel="stylesheet" />
    <title>SIAE - Sistema Integral de Actividades Extraescolares</title>
  </head>

  <body>
    <header>
      <div class="contenedorHeader">
        <img src="CSS/Pictures/TecNM_logo.png"/></a>
        <h2 class="titulo">SIAE - Sistema Integral de Actividades Extraescolares</h2>
        <nav>
          <a id="myBtn">Ingreso</a>
        </nav>
      </div>
    </header>
    
    <div id="myModal" class="modal">
      <div class="modal-content">
          <span class="close">&times;</span>
          <form>
              <label for="username">Usuario</label><br>
              <input type="text" id="username" name="username" required><br>
              <label for="password">Contraseña</label><br>
              <input type="password" id="password" name="password" required>
              <input type="submit" value="Iniciar Sesión">
          </form>
      </div>
    </div>

    <main>
      <div class="contenedorBanner">
        <div class="contenedorInformation">
          <h3 class="titulo">Bienvenidos a Extraescolares</h3>
          <p class="descripcion">
            <br>
              <p>Tu recurso en línea para descubrir, explorar y participar en una gran variedad de actividades deportivas y culturales.</p>
              <p>Sabemos que el deporte y la cultura son dos pilares fundamentales que nutren nuestras vidas, 
                mejoran nuestra salud y bienestar, lo cual nos permiten expresar y desarrollar nuestras habilidades y/o talentos.<br> 
                Es por eso que nos dedicamos a brindarte la información más completa, actualizada y relevante sobre actividades, 
                eventos y organizaciones en estas áreas.</p>
            
              <p>En el departamento de actividades extraescolares, creemos en la importancia de una vida equilibrada llena de experiencias enriquecedoras. 
                Ya sea que busques una nueva pasión, desarrolles un talento o simplemente te mantengas activo y comprometido, 
                estamos aquí para ayudarte en tu viaje.</p>
            <br>
            <button id="myBtnInfo" role="button" class="boton">
              <i class="fas fa-info-circle"></i>Más información
            </button>
          </p>
        </div>
      </div>

      <div class="ContainerTitle">
          <h3>Actividades Culturales</h3>
      </div>

      <div class="ContainerClasesExtracurriculares">
        <div class="row row-cols">
          <div class="col">
            <div class="card-shadow">
              <img src="CSS/Pictures/1.jpg">
              <div class="card-body">
                <h5 class="card-title">actividad</h5>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="ContainerTitle">
          <h3>Actividades Deportivas</h3>
      </div>

      <div class="ContainerClasesExtracurriculares">
        <div class="row row-cols">
          <div class="col">
            <div class="card-shadow">
              <img src="CSS/Pictures/2.jpg">
              <div class="card-body">
                <h5 class="card-title">actividad</h5>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="ContainerTitle">
          <h3>Caja de Comentarios</h3>
      </div>

      <div class="comments-section">
        <h3>Deja un comentario:</h3>
        <textarea placeholder="Escribe tu comentario aquí..."></textarea>
        <button>Enviar</button>
      </div>

      <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
      <script src="main.js"></script>
      <script src="JS/JSModalIngreso.js"></script>
    </main>
  </body>
</html>