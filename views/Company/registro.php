<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="icon" href="assets/img/palmera.png">
    <link rel="stylesheet" href="assets/css/promos.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<header>
        <div class="contenedor">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <img src="imagenes/WhatsApp Image 2024-01-04 at 12.30.33 PM.jpeg" alt="" >
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
                                <a class="nav-link" href="?c=PromocionesControllers&a=Promocion">Promociones</a>
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

<div class="card-group">
    <input type="button" value="">
    <div class="card">
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Número de Boletos</label>
                    <input type="text" class="form-control" name="ciclo" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Fecha de Salida</label>
                    <input type="date" class="form-control" name="fecha" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre Completo</label>
                    <input type="text" class="form-control" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Apellido Paterno</label>
                    <input type="text" class="form-control" name="apellido" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Apellido Materno</label>
                    <input type="text" class="form-control" name="apellidos" required>
                </div>
                <div class="form-group">
                    <label for="genero">Destino</label>
                    <input type="text" class="form-control" name="genero" required>
                </div>
                <div class="form-group">
                    <label for="fechas">Fecha de Regreso</label>
                    <input type="date" class="form-control" name="fechas" required>
                </div>
                
            
        </div>
    </div>
    <div class="card">
        <div class="card-body">
        
                <div class="form-group">
                    <label for="curp">Cédula</label>
                    <input type="text" class="form-control" name="curp" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Hora de salida</label>
                    <input type="text" class="form-control" name="sangre" required>
                    
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Discapacidad</label>
                    <input type="text" class="form-control" name="discapacidad" required>
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Municipio</label>
                    <input type="text" class="form-control" name="municipio" required>
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Localidad</label>
                    <input type="text" class="form-control" name="colonia" required>
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Teléfono</label>
                    <input type="text" class="form-control" name="telefono" required>
                    
                </div><br>
                <button type="submit" class="btn btn-primary">REGISTRARME</button>
                <a href="?c=Alumnos&a=ConsultarAlumnos" class="btn btn-warning">CONSULTAR</a> 
            </form>
        </div>
    </div>
</div>
    
</body>

<div class="caja202">&copy;DECAMERON</div>
</html>



