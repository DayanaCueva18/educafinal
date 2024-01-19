<!Doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="autor" content="Dayana Cueva">
  <title>Agencia de viajes </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../../assets/css/promociones.css">
</head>

<body>
  <header>
    <div class="contenedor">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <img src="../../assets/img/inicio.jpeg" alt="" height="50px" style="justify-content: center;">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="views/Company/index.php" style="line-height: 12px;"> Inicio
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="views/Company/nosotros.php" style="line-height: 12px;">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="views/Company/promociones.php" style="line-height: 12px;">Promociones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="views/Company/contactos.php" style="line-height: 11px;">Contactos</a>
              </li>
              
            </ul>

          </div>
        </div>
      </nav>


    </div>
  </header>
  <section class="carrusel">
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../../assets/img/julius-jansson-YsH5Ov6wkMk-unsplash.jpg" class="d-block w-100" alt="playa" height="350" width="100">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="../../assets/img/avión.webp" class="d-block w-100" alt="centinela" height="350" width="100">
          <div class="carousel-caption d-none d-md-block">

          </div>
        </div>
        <div class="carousel-item">
          <img src="../../assets/img/carro.jpeg" class="d-block w-100" alt="portada" height="350" width="100">
          <div class="carousel-caption d-none d-md-block">

          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <hr><br>
  <h2 style="text-align: center; color: rgb(10, 10, 10);
    ;"><strong style="font-size: 21px;">Explora las mejores tarifas en vuelos para los próximos 90 días</strong></h2>
  <br><br>
  <hr>


  <section class="container-fluid section-flipcards text-center">
    <div class="row ">
      <div class="col p-2">

        <div class="flip-card mx-auto">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img class="img-fluid" src="../../assets/img/pastaza.jpg" alt="mede" style="width:217px;height:250px;">
            </div>
            <div class="flip-card-back">
              <p> Desde Quito <br><br />Hacia Medellín <br><br /> Salida: 20 de enero <br> <br /> Regreso: 24 de febrero
                <br><br /> Precio: USD 127
              </p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col  p-2">

        <div class="flip-card mx-auto">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../../assets/img/bogota.jpg" alt="Bogota" style="width:217px;height:250px;">
            </div>
            <div class="flip-card-back">
              <p>Desde Quito <br><br />Hacia Bogotá <br><br /> Salida: 30 de mayo <br> <br /> Regreso: 24 de julio
                <br><br /> Precio: USD 160
              </p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col  p-2">

        <div class="flip-card mx-auto">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img class="img-fluid" src="../../assets/img/cuenca.webp" alt="Cuenca" style="width:217px;height:250px;">
            </div>
            <div class="flip-card-back">
              <p>Desde Quito <br><br />Hacia Cuenca <br><br /> Salida: 10 de marzo <br> <br /> Regreso: 30 de marzo
                <br><br /> Precio: USD 207
              </p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col  p-2">

        <div class="flip-card mx-auto">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img class="img-fluid" src="../../assets/img/quito.jpg" alt="Quito" style="width:217px;height:250px;">
            </div>
            <div class="flip-card-back">
              <p>Desde Colombia <br><br />Hacia Quito <br><br /> Salida: 09 de abril <br> <br /> Regreso: 24 de abril
                <br><br /> Precio: USD 215
              </p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
  </section>
  <br><br><br>

  <section class="container-fluid  section-flipcards text-center">
    <div class="row ">
      <div class="col p-2">

        <div class="flip-card mx-auto">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img class="img-fluid" src="../../assets/img/baños.jpg" alt="banos" style="width:217px;height:250px;">
            </div>
            <div class="flip-card-back">
              <p> Desde Quito <br><br />Hacia baños <br><br /> Salida: 15 de mayo <br> <br /> Regreso: 19 de mayo
                <br><br /> Precio: USD 227
              </p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col p-2">
        <div class="flip-card mx-auto">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img class="img-fluid" src="../../assets/img/guayaquil.jpg" alt="guaya" style="width:217px;height:250px;">
            </div>
            <div class="flip-card-back">
              <p>Desde Quito <br><br />Hacia Guayaquil <br><br /> Salida: 11 de febrero <br> <br /> Regreso: 16 de
                febrero <br><br /> Precio: USD 177 </p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col p-2">
        <div class="flip-card mx-auto">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../../assets/img/Cotopaxi-destino-turistico-imprescindible-Noticias-Ecuador-1-905x613.jpg" alt="cotopaxi" style="width:217px;height:250px;">
            </div>
            <div class="flip-card-back">
              <p>Desde Quito <br><br />Hacia el Cotopaxi<br><br /> Salida: 05 de abril <br> <br /> Regreso: 05 de abril
                <br><br /> Precio: USD 149
              </p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col p-2">
        <div class="flip-card mx-auto">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../../assets/img/tonsupa.jpg" alt="Tonsupa" style="width:217px;height:250px;">
            </div>
            <div class="flip-card-back">
              <p>Desde Quito <br><br />Hacia Tonsupa<br><br /> Salida: 15 de abril <br> <br /> Regreso: 25 de abril
                <br><br /> Precio: USD 229
              </p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
  </section>
  <br> <br><br><br />

  <section class="container-fluid section-flipcards text-center">
    <div class="row ">
      <div class="col p-2">
        <div class="flip-card mx-auto">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../../assets/img/loja.jpg" alt="loja" style="width:217px;height:250px;">
            </div>
            <div class="flip-card-back">
              <p>Desde Quito <br><br />Hacia Loja<br><br /> Salida: 12 de septiembre <br> <br /> Regreso: 05 de octubre
                <br><br /> Precio: USD 309
              </p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col p-2">
        <div class="flip-card mx-auto">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../../assets/img/galapagos.jpg" alt="iguana" style="width:217px;height:250px;">
            </div>
            <div class="flip-card-back">
              <p>Desde Quito <br><br />Hacia Galápagos<br><br /> Salida: 17 de junio <br> <br /> Regreso: 15 de julio
                <br><br /> Precio: USD 734
              </p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col p-2">

        <div class="flip-card mx-auto">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../../assets/img/tulcan.webp" alt="tulcan" style="width:217px;height:250px;">
            </div>
            <div class="flip-card-back">
              <p>Desde Quito <br><br />Hacia Tulcán<br><br /> Salida: 21 de agosto <br> <br /> Regreso: 05 de septiembre
                <br><br /> Precio: USD 449
              </p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col p-2">
        <div class="flip-card mx-auto">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../../assets/img/riobamba.jpg" alt="riobamba" style="width:217px;height:250px;">
            </div>
            <div class="flip-card-back">
              <p>Desde Quito <br><br />Hacia Riobamba <br><br /> Salida: 30 de julio <br> <br /> Regreso: 07 de agosto
                <br><br /> Precio: USD 417
              </p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

  </section>
  <br><br><br><br />

  <div class="d-grid gap-2 col-6 mx-auto" style="justify-content: center;">
    <a href="maspromo.html"> <button class="btn btn-primary" type="button"> Más Promociones </button></a>

  </div>

  <br><br>
  <hr color="black">
  <h3 style="text-align: center; color: rgb(10, 10, 10);"><strong style="font-size: 20px;">Formulario de
      Insripción</strong></h3>


  <section class="section-comment">
    <h3 style="font-size: 18px;"> Llene los campos solicitados </h3>

    <form action="" method="POST">

      <fieldset class="comment">

        <hr size="8px" color="black">

        <label style="font-size: 13px;" for="fname">Nombre:</label><br>

        <input style="font-size: 13px;" type="text"  placeholder="Escriba su nombre:" required class="fname" name="Nombre"><br>

        <label style="font-size: 13px;" for="lname"> Apellido:</label><br>

        <input style="font-size: 13px;" type="text"  placeholder="Escriba su apellido:" required class="lname" name="Apellido"><br>

        <label style="font-size: 13px;" for="email">Correo Electrónico:</label><br>

        <input style="font-size: 13px;" type="email"  placeholder="Escriba su correo electronico:" required class="email" name="Email"><br>

      </fieldset>
      <br>

      <label style="font-size: 13px;" for="comentario">Escriba el destino selecciona para poder contactarnos con
        usted</label><br>

      <input style="font-size: 13px;" type="text"  placeholder="Escribanos su respuesta:" required class="email" name="Respuesta"><br>

      <fieldset class="field">
        <input type="submit" class="submit">
      </fieldset>
      
    </form>
  </section>


  <img class="img-fluid" src="../../assets/img/iconos.png" alt="" height="100px">




  <footer class="footer">

    <div class="footer-content container">
      <div class="row">

        <div class="col link">
          <br>
          <h3 style="color: aliceblue; text-align: center;">Contáctanos</h3>
          <br>
          <ul>
            <li><a href="https://www.decameron.com/es/ec-contactanos"> Contactos</a></li><br>
            <li><a href="https://www.decameron.com/es/ec-terminos-y-condiciones">Términos y condiciones</a></li><br>
            <li><a href="https://www.decameron.com/es/ec-eventos">Eventos </a></li>
          </ul>
        </div>
        <div class="col link">
          <br>
          <h3 style="color: aliceblue; text-align: center;">Informate</h3>
          <br>
          <ul>
            <li><a href="https://www.decameron.com/es/ec-noticias/ley-seca-en-ecuador-octubre">Noticias</a></li><br>
            <li><a href="https://www.decameron.com/images/documentos/2021/canal-etico/codigo-de-etica-espanol.pdf">Código
                de conducta</a></li><br>
            <li><a href="https://www.decameron.com/es/ec-conocenos">Conocenos</a></li>
          </ul>
        </div>
        <div class="col link">
          <br>
          <h3 style="color: aliceblue; text-align: center;">Términos</h3>
          <br>
          <ul>
            <li><a href="https://www.decameron.com/es/ec-cruce-de-cuentas"> Cruce de cuentas </a></li><br>
            <li><a href="https://www.decameron.com/es/ec-terminos-y-condiciones">Terminos y condiciones</a></li><br>
            <li><a href="https://www.decameron.com/es/ec-contrato-de-informacion-y-uso-del-sitio">Uso del sitio </a>
            </li>
          </ul>
        </div>
        <div class="col link">
          <br>
          <h3 style="color: aliceblue; text-align: center;">Políticas</h3>
          <br>
          <ul>
            <li><a href="https://www.decameron.com/es/ec-politicas-de-privacidad"> Politicas de privaidad </a></li><br>
            <li><a href="https://www.decameron.com/images/documentos/2024/ecuador/tarifario.pdf">Tarifario 2024</a></li>
            <br>
            <li><a href="https://www.decameron.com/es/ec-registro-pqr">Registro de peticiones </a></li>

          </ul>
        </div>
      </div>
    </div>

  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>