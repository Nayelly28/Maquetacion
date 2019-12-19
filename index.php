<?php 
/*
include("conection.php")
*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>COLLEGE</title>

	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="hidden">
	<header>
		<nav id="nav" class="nav1">
			<div class="contenedor-nav">
				<div class="logo">
					<img src="principal/logo.png">
				</div>
			<div class="enlaces" id="enlaces">
				<a href="#" id="enlace-inicio" class="btn-header">INICIO</a>
				<a href="notas.php" id="enlace-lista" class="btn-header">LISTADO DE ALUMNOS</a>
				<a href="registro.php" id="enlace-registro" class="btn-header">REGISTRAR ALUMNO</a>
				<a href="#" id="enlace-consulta" class="btn-header">CONSULTAS Y CONTACTOS</a>
			</div>
				<div class="icono" id="open">
					<span>		&#9776;		</span>
				</div>
		</div>
		</nav>
		<div class="textos">
			<h1>UNIVERSIDAD PARTICULAR</h1>
			<h2>EECCI</h2>
		</div>
	</header>

	<main>
		<section class="team contenedor" id="equipo">
			<h3>CONTACTENOS</h3>
			<p class="after">Todo lo que tiene que saber sobre nosotros</p>
			<div class="card">
				<div class="content-card">
					<div class="img">
						<img src="principal/CV.jpg">
					</div>

					<div class="texto-team">
						<h4>Cursos CERTIFICADOS</h4>
						<p>En nuestra pagina podras encontrar diversos curos.</p>
					</div>
				</div>
				<div class="content-card">
					<div class="img">
						<img src="principal/ecci.jpg">
					</div>

					<div class="texto-team">
						<h4>NUESTRA UNIVERSIDAD</h4>
						<p>Informsese más sobre nosotros.</p>
					</div>
				</div>
				<div class="content-card">
					<div class="img">
						<img src="principal/idiomas.jpg">
					</div>

					<div class="texto-team">
						<h4>CENTRO DE LENGUAS</h4>
						<p>Matrículas abiertas para los cursos de inglés.</p>
					</div>
				</div>

			</div>
		</section>


		<section class="about" id="servicio">
			<div class="contenedor">
				<h3>MAS SOBRE NOSOTROS</h3>
				<p class="after">Acerca de nosotros.</p>
				<div class="servicios">

					<div class="caja-servicios">
						<img src="logos/wifi.jpg" height="180px" width="180px">
						<h4>Zona Wifi</h4>
						<p>Contamos con zona wifi.</p>		
					</div>

					<div class="caja-servicios">
						<img src="logos/document.png">
						<h4>Reseñas y documentos</h4>
						<p>Acercate a nuestras sedes.</p>
					</div>	

					<div class="caja-servicios">
						<img src="logos/contacto.png" height="200px" width="230px">
						<h4>Contactanos</h4>
						<p>Informese mas sobre nosotros.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="trabajo" class="work contenedor">
			<h3>SERVIDOR</h3>
			<p class="after">Todo lo que necesita saber
				
			</p>
			<div class="botones-work">
				<ul>
					<li class="filter active" data-nombre='com'>COMUNICATE</li>
					<li class="filter" data-nombre='opi'>OPINA</li>
					<li class="filter" data-nombre='numC'>NUM CONTACTO</li>
				</ul>
			</div>
			<div class="galeria-work">
				<div class="cont-work CV">
					<div class="img-work">
						<img src="images/becas.jpg" height="250px" width="300px"> 
					</div class="textos-work">
						<h4>BECAS</h4>
					<div>
					</div>
				</div>

				<div class="cont-work CV">
					<div class="img-work">
						<img src="images/CVG.jpg" height="250px" width="300px"> 
					</div class="textos-work">
						<h4>CURSOS VIRTUALES GRATUITOS</h4>
					<div>
					</div>
				</div>
				
				<div class="cont-work CV">
					<div class="img-work">
						<img src="images/CV.jpg"height="250px" width="300px"> 
					</div class="textos-work">
						<h4>EVALUACIONES VIRTUALES</h4>
					<div>
					</div>
				</div>

			</div>
		</section>
	</main>

	<footer id="contacto">
		<div class="footer contenedor">
			<div class="marca-logo">
				<img src="principal/estudiantes.png">
			</div>

			
			<div class="iconos">
				<i class="fab fa-facebook-square"></i>
				<i class="fab fa-instagram"></i>
				<i class="fab fa-whatsapp-square"></i>
			</div>	

				
			<p>Creciendo, mejorando cada dia para un mejor presente.</p>

		</div>
	</footer>

</body>
</html>