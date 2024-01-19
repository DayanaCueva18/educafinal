
<!Doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="autor" content="Dayana Cueva">
    <title>Agencia de viajes </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="icon" href="assets/img/palmera.png">
    <link rel="stylesheet" href="assets/css/promos.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>

<body>
    <header>
        <div class="contenedor">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <img src="assets/img/inicio.jpeg" alt="" >
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="views/Company/index.php"> Inicio </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="views/Company/nosotros.php">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="views/Company/promociones.php">Promociones</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="views/Company/contactos.php">Contactos</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="?c=Alumnos&a=registro">Registro</a>
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
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/neom-gOqBe7ropxM-unsplash.jpg" class="d-block w-100" alt="playa"
                        height="550" width="300">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/daniel-leone-g30P1zcOzXo-unsplash.jpg" class="d-block w-100" alt="centinela" height="550" width="300">
                    <div class="carousel-caption d-none d-md-block">
                    
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/sergei-a--heLWtuAN3c-unsplash.jpg" class="d-block w-100" alt="portada" height="550" width="300">
                    <div class="carousel-caption d-none d-md-block">
                        
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="aventura">
        <img src="assets/img/logod.png" alt="">
        <div class="container text-center">
            <br>
            
            <h2 style="text-align: center;">Planes de aventura y diversión</h2>
            <p class="text-p" style="font-size: 18px;">Los paquetes turísticos de nuestros hoteles todo incluido tienen planes de aventura y
                diversión.</p>

            <div class="container paquetes-group">
                <div class="row">
                    <div class="col paquetes-1">
                        <img src="assets/img/royal-decameron-mompiche-all-inclusive-general-dd45e9e.jpg" alt="" height="200px" width="200px"><br>
                        <h3>Mompiche </h3>
                        <p style="text-align: justify; font-size: 18px; line-height: 2;"> Mompiche te brinda de todo un poco: relajación, naturaleza y aventura. En este
                            maravilloso destino rodeado de 6 tipos de manglares, puedes
                            realizar caminatas llenas de aventura por senderos y cascadas. </p>
                    </div>
                    <div class="col paquetes-1">
                        <img src="assets/img/Sin título.jpg" alt="" height="200px" width="200px">
                        <h3>Galápagos </h3>
                        <p style="text-align: justify; font-size: 18px; line-height: 2;">Si consideras este hermoso lugar como tu próximo
                            destino, debes indagar sobre todas las agencias de viajes para las
                            bellas Islas Galápagos.</p>
                    </div>
                    <div class="col paquetes-1">
                        <img src="assets/img/mexico.jpg" alt="" height="100px" width="100px">
                        <h3> Isla Coral </h3>
                        <p style="text-align: justify; font-size: 18px; line-height: 2;">Ubicado en la Bahía del hermoso Rincón de Guayabitos, en un pueblo tranquilo y a la vista de una de las
                            playas más preciosas y gigantes del maravilloso pueblo que se encuentra ubicado en la provincia de  Riviera Nayarit.</p>
                    </div>  
                </div>
            </div>
            <p id="demo" style="display:none" >Haz leido la informacion completa!!</p>

<button type="button" onclick="document.getElementById('demo').style.display='block'">Información</button>
            <br><br/>
        </div>
    </section>

    <main class="Services ">
        <div class="services-content container">
            <h2>NO TE PIERDAS ESTAS PROMOCIONES</h2>
            <div class="row services-group">
                <div class="col services-1">
                    <img class="img-fluid" src="assets/img/adrien-tutin-hCh_PHIhoLI-unsplash.jpg" alt="" width="300px">
                    <h3 style="background-color: aliceblue;">Boyacá</h3>
                </div>
                <div class="col services-1">
                    <img class="img-fluid" src="assets/img/tran-mau-tri-tam-hmBJtWxFOdg-unsplash.jpg" alt="" width="400px" >
                    <h3 style="background-color: aliceblue;">San Andrés</h3>
                </div> 
            </div>
            <p style="font-size: 18px; line-height: 2;">Colombia es un increíble destino donde puedes encontrar una gran diversidad de paisajes y es apta para
                todo tipo de viajero, puedes encontrar las mejores playas del Caribe, pasando por destinos como:
                Cartagena, Santa Marta, San Andrés, donde podrás encontrar una gran diversidad de hoteles todo incluido,
                en cada uno encontrar diferentes características para que sorprendas a tu familia o pareja con unas
                vacaciones inolvidables frente al mar con un excelente servicio. También puedes encontrar otros destinos
                en Colombia como el Eje Cafetero, Amazonas, Bogotá, Boyacá, entre otros. ¡Disfruta los mejores hoteles
                todo incluido Decameron en Colombia!</p>
                <a href="#" class="btn-1" style="font-size: 17px;" onclick="cambiarColorPagina()">Información</a>

                <script>
                    function cambiarColorPagina() {
                        // Genera un color aleatorio en formato hexadecimal
                        var nuevoColor = '#' + Math.floor(Math.random()*16777215).toString(16);
                        
                        // Aplica el nuevo color de fondo a la página
                        document.body.style.backgroundColor = nuevoColor;
                    }
                </script>
            <br><br/>
        </div>
    </main>
    <script>
window.onload=function(){alert('Bienvenido a esta pagina');}
window.onunload=function(){alert('Vuelva en otro momento');}
</script>

    <section class="general">
            <div class="general-1 p-5">
                <h2><b style="font-size: 18px;">DILE SÍ A NUEVOS VIAJES </b></h2>
                
                <p style="font-size: 18px; line-height: 2;">Estamos convencidos que cada vez existen más personas que sueñan con vivir unas vacaciones inolvidables y
                    conectarse con las inigualables experiencias que nuestros Hoteles Decameron a nivel nacional e
                    internacional, pueden ofrecer.
    
                    A la fecha, nuestra fuerte presencia en latinoamericana y el Caribe, ofrece la posibilidad a los
                    viajeros de vivir unas vacaciones Todo Incluido en Colombia, Ecuador, El Salvador, Haití, Jamaica,
                    México, Panamá y Perú.
                </p>
                <a href="#" class="btn1" style="font-size: 17px;">Información</a>
            </div>
            <div class="general-2"></div>
    </section>

    <section class="general">
        <div class="general-3"></div>
        <div class="general-1 p-5">
            <h2><b style="font-size: 20px;">DILE SÍ A NUEVOS SUEÑOS Y METAS POR CUMPLIR</b> </h2>
            
            <p style="font-size: 18px;">“Sin duda, “Dile sí” es una maravillosa campaña que nos inspira y nos llena de muchísimo entusiasmo, ya
                que, a través de ella, destacamos el rol que cumplen los visitantes como eje central de toda buena
                experiencia e insitamos a más personas a cumplir sus sueños.Las vacaciones mejoran su estado de ánimo y reducen el estrés. También puede ayudar temporalmente a aumentar la productividad.Las personas que viajan con más frecuencia están más satisfechas con su salud física y su bienestar.

            </p>
            <a href="#" class="btn1" style="font-size: 17px;">Información</a>
        </div>
    </section>

    <section class="blog container">
        <h2>Vacaciones todo incluido con Hoteles Decameron</h2>
        
        <p style="font-size: 18px;">Ven y descubre la magia del Todo Incluido Decameron, un concepto para pasar las mejores vacaciones. Disfruta
            de tu tiempo de descanso en el hotel y el destino que más te guste, nosotros haremos de tu estadía una
            experiencia memorable brindándote, servicio, entretenimiento y diversión.</p>
        <div class="blog-container">
            <div class="blog-1">
                <img class="img-fluid" src="assets/img/comidas-platos.png" alt="">
                <h3>Alimentación Ilimitada</h3>
                <p>En nuestros Hoteles podrás disfrutar exquisitos y variados desayunos y almuerzos al estilo bufet. Al
                    llegar la noche podrás compartir con los tuyos de cenas a la carta, con variadas opciones que te
                    permitirán degustar los sabores del mundo.</p>

            </div>
            <div class="blog-1">
                <img class="img-fluid" src="assets/img/recreacion.jpg" alt="">
                <h3>Recreación</h3>
                <p>En Decameron encuentras diversión para todos, te ofrecemos una amplia variedad de actividades, para
                    todas las edades y gustos, aeróbicos, yoga, tenis, clases de baile, manualidades, juegos, trivias y
                    concursos, deportes náuticos no motorizados y todo el entretenimiento para que vivas unas vacaciones
                    inolvidables.</p>
            </div>
            <div class="blog-1">
                <img class="img-fluid" src="assets/img/alojamiento.jpg" alt="">
                <h3>Alojamiento</h3>
                <p>Cada una de nuestras habitaciones está equipada con todas las comodidades necesarias para que vivas
                    una placentera estadía, en donde tendrás una experiencia única de relajación, descanso y comodidad
                    ¡Es hora de darte el descanso que te mereces!.</p>
            </div>
        </div>
        

    </section>
    <div class="contenedor-principal">
        <br>
        <div class="grid-1"> <b>DILE SÍ A NOCHES LLENAS DE CULTURA</b> <hr> <p style="font-size: 18px;  "> Y maravíllate con las estupendas puestas en escena del Ballet Decameron, que te transportarán a un país diferente, cada noche. <br><br> <img class="img-fluid" src="assets/img/shows-decameron.jpg" alt="" ></p></div>
        <div class="grid-2"> <b>DILE SÍ A PROBAR NUEVOS SABORES </b><hr> <p style="font-size: 18px; color: rgb(247, 247, 242);">Con la variedad gastronómica de nuestros restaurantes buffet y a la carta, podrás degustar una y otra vez exquisitos sabores en tus desayunos, almuerzos, snacks y cenas.</p> <img class="img-fluid" src="assets/img/platos-decameron.jpg" alt="teatro" ></div>
    </div>

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
                        <li><a href="https://www.decameron.com/images/documentos/2021/canal-etico/codigo-de-etica-espanol.pdf">Código de conducta</a></li><br>
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
                        <li><a href="https://www.decameron.com/es/ec-contrato-de-informacion-y-uso-del-sitio">Uso del sitio </a></li>
                    </ul>
                </div>
                <div class="col link">
                    <br>
                    <h3 style="color: aliceblue; text-align: center;">Políticas</h3>
                    <br>
                    <ul>
                        <li><a href="https://www.decameron.com/es/ec-politicas-de-privacidad"> Politicas de privaidad </a></li><br>
                        <li><a href="https://www.decameron.com/images/documentos/2024/ecuador/tarifario.pdf">Tarifario 2024</a></li><br>
                        <li><a href="https://www.decameron.com/es/ec-registro-pqr">Registro de peticiones </a></li>
                    
                    </ul>
                </div>
            </div>
        </div>
        
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>