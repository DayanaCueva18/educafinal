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


<!-- Page header -->
<div class="full-box page-header">
	<h3 class="text-left">
		<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE USUARIOS
		<hr>
        <a href="?c=Alumnos&a=registro" class="btn btn-secondary">Atrás</a>
	</h3>
</div>
<!-- Content -->
<div class="container-fluid">
	<div class="table-responsive">
		<table class="table table-dark table-sm">
			<thead>
				<tr class="text-center roboto-medium">
					<th>Números Boletos</th>
					<th>Fecha Salida</th>
					<th>Nombre Completo</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
					<th>Destino</th>
					<th>Fecha Regreso</th>
					<th>Cédula</th>
                    <th>Hora salida</th>
                    <th>Discapacidad</th>
                    <th>Municipio</th>
                    <th>Colonia</th>
                    <th>Telefono</th>
                    <!-- <th>Actualizar</th>
                    <th>Eliminar</th> -->
				</tr>
			</thead>
			<tbody>
				<?php foreach ($alumnos as $alumno): ?>
					<tr class="text-center">
						<td>
							<?php echo $alumno->getCiclo_escolar(); ?>
						</td>
						<td>
							<?php echo $alumno->getFecha(); ?>
						</td>
						<td>
							<?php echo $alumno->getNombre_completo(); ?>
						</td>
						<td>
							<?php echo $alumno->getApellido_paterno(); ?>
						</td>
						<td>
							<?php echo $alumno->getApellido_materno(); ?>
						</td>
						<td>
							<?php echo $alumno->getGenero(); ?>
						</td>
                        <td>
							<?php echo $alumno->getFecha_Nacimiento(); ?>
						</td>
                        <td>
							<?php echo $alumno->getCurp(); ?>
						</td>
                        <td>
							<?php echo $alumno->getTipo_sangre(); ?>
						</td>
                        <td>
							<?php echo $alumno->getDiscapacidad(); ?>
						</td>
                        <td>
							<?php echo $alumno->getMunicipio(); ?>
						</td>
                        <td>
							<?php echo $alumno->getColonia(); ?>
						</td>
                        <td>
							<?php echo $alumno->getTelefono(); ?>
						</td>
                       
						
					</tr>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
</section>