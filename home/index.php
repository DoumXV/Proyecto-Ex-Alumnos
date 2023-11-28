<?php
include("../calendario/calendario.php");
$query=$conexion->query("SELECT * FROM eventos WHERE inicio >= now()");
$meses = array(
  1 => "Enero",
  2 => "Febrero",
  3 => "Marzo",
  4 => "Abril",
  5 => "Mayo",
  6 => "Junio",
  7 => "Julio",
  8 => "Agosto",
  9 => "Septiembre",
  10 => "Octubre",
  11 => "Noviembre",
  12 => "Diciembre"
);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ex alumnos UDA</title>
</head>
<link rel="stylesheet" href="index.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<body>
	<header>
		<a href="index.html" class="logo"><img class="logo-uda" src="../img/logo-corp-diic-txtblanco.png" alt="Logo UDA"></a>
		<nav>
			<ul>
				<li><a class="linkeado" href="#">Inicio</a></li>
				<li><a class="linkeado" href="#">Galeria</a></li>
        <li><a class="linkeado" href="#">Empleos</a></li>
				<li><a class="linkeado" href="#">Administrador</a></li>
			</ul>
		</nav>
	</header>
    <section class="zona1">
      <div class="header-difuminado mx-auto"></div>

      <!--<div class="h-75 d-flex flex-column align-items-center justify-content-center">
        <h1 class="texto">Departamento de Ingenieria</h1>
        <p class="texto">Pagina de Ex-alumnos</p>
      </div>-->

    </section>
    <section class="recientes">
      <h2 class="titulos container-fluid text-center">Ex-Alumnos destacados</h2>
      <div class="tarjetas d-flex flex-row justify-content-center align-content-center">
        <div class="flip-card me-5">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../img/foto-individual-para-foto-de-perfil-de-equipo-de-p-upscaled (1).png" alt="Avatar" style="width:300px;height:300px;">
              <h1>Violeta Parra</h1>
            </div>
            <div class="flip-card-back">
              <h1>Violeta Parra</h1>
              <p>Contacto</p>
              <p>Descripcion</p>
            </div>
          </div>
        </div>
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../img/foto-individual-para-foto-de-perfil-de-equipo-de-p-upscaled (2).png" alt="Avatar" style="width:300px;height:300px;">
              <h1>Matias Fernandez</h1>
            </div>
            <div class="flip-card-back">
              <h1>Matias Fernandez</h1>
              <p>Contacto</p>
              <p>Descripcion</p>
            </div>
          </div>
        </div>
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../img/foto-individual-para-foto-de-perfil-de-equipo-de-p-upscaled (3).png" alt="Avatar" style="width:300px;height:300px;">
              <h1>Andrea Gonzalez</h1>
            </div>
            <div class="flip-card-back">
              <h1>Andrea Gonzalez</h1>
              <p>Contacto</p>
              <p>Descripcion</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="calendario d-flex flex-column">
      <h2 class="titulos container-fluid text-center">Eventos</h2>
      <div class="tarjetas d-flex flex-row  justify-content-around">
        <?php while($registros=$query->fetch_object()){ ?>
            <div class="card1 card text-center" style="border: 1px solid black;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
              <div class="card-header" style="background-color: #364c59; color: white;">
                <h3><?php echo $registros->nombre_evento; ?></h3>
              </div>
              <div class="card-body">
                <div class="ubicacion d-flex mx-auto">
                  <img src="../img/compass-regular.svg" alt="">
                  <h5 class="card-title"><?php echo $registros->ubicacion; ?></h5>
                </div>
                <div class="horario d-flex flex-column">
                <?php
                  // Convertir la cadena de fecha a un objeto DateTime
                  $fechaObj = new DateTime($registros->inicio);

                  // Obtener el día, mes y hora
                  $dia = $fechaObj->format('d');
                  $mes = $fechaObj->format('m');
                  $hora = $fechaObj->format('H:i');

                  // Imprimir los resultados
                  echo "<div class='fecha'>";
                  echo "<div class='dia'><p>$dia</p></div>";
                  echo "<div class='mes'><p>$meses[$mes]</p></div></div>";
                  echo "<div class='ini'>";
                  echo "<img src='../img/clock-regular.svg'>";
                  echo "<p>Inicio: $hora</p></div>"; 
                ?>
                  <?php
                    // Convertir la cadena de fecha a un objeto DateTime
                    $fechaObj = new DateTime($registros->final);

                    // Obtener el día, mes y hora
                    $dia = $fechaObj->format('d');
                    $mes = $fechaObj->format('m');
                    $hora_final = $fechaObj->format('H:i');

                    // Imprimir los resultados
                    echo "<div class='fin'>";
                    echo "<img src='../img/clock-solid.svg'>";
                    echo "<p>Final: $hora_final</p></div>"; 
                  ?>
                </div>
                
                <button type="button" class="btn btn-dark">Mas Información</button>
              </div>
            </div>
          
        <?php } ?>
      </div>
      
      
    </section>

    <section class="formulario-caja">
      <h2 class="titulos container-fluid text-center my-3">Formulario</h2>
      <p class="text-center mt-5" style="font-family: Montserrat;font-size: 20px;">¿Quieres ser parte de nuestra galeria de ex-alumnos del departamento de Ingenieria civil en computacion e Informática?</p>
      <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="d-flex flex-column justify-content-center align-items-center my-5 w-75">
          <form action="" class="w-75">
            <div class="mb-3">
              <label for="nombre_peticion" class="form-label">Nombre Completo</label>
              <input type="text" id="nombre_peticion" class="form-control" name="nombre_peticion">
            </div>
            <div class="mb-3">
              <label for="email_peticion" class="form-label">Email</label>
              <input type="email" id="email_peticion" class="form-control" name="email_peticion">
            </div>
            <div class="mb-3">
              <label for="contacto_peticion" class="form-label">Numero de contacto</label>
              <input type="tel" id="contacto_peticion" class="form-control" name="contacto_peticion">
            </div>
            <div class="mb-3">
              <label for="descripcion_peticion" class="form-label">Descripcion del ex-alumno</label>
              <textarea class="form-control" name="descripcion_peticion" id="descripcion_peticion" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="background-color: #364c59; border: 1px solid black; font-family: Montserrat;" name="enviar_peticion">Enviar</button>
          </form>
        </div>
      </div>

    </section>
    <footer>
        <div class="contenedor-footer">
            <div class="footer-logo">
                <img src="../img/logo-udacorp-txtblanco.png" alt="">
                <ul>
                  <li class="mt-1"><a href="">Ubícanos en
                    Copiapó, Av. Copayapu 485</a></li>
                  <li class="mt-1"><a href="">(52) 2 255555</a></li>
                  <li class="mt-1"><a href="">anakarina.pena@uda.cl</a></li>
              </ul>
            </div>
            <div class="acerca mx-auto">
                <h4 class="mt-2">Links</h4>
                <ul>
                    <li class="mt-4"><a href="">Académicos</a></li>
                    <li class="mt-1"><a href="">Noticias</a></li>
                    <li class="mt-1"><a href="">Moodle</a></li>
                    <li class="mt-1"><a href="">Instagram</a></li>
                </ul>
            </div>
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1019.5733182946361!2d-70.35256776105918!3d-27.35752684276538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x969803ec1a19a399%3A0x3cd60b166021c427!2sDIICC%20UDA!5e0!3m2!1ses-419!2scl!4v1700927546943!5m2!1ses-419!2scl" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>    
        <div class="copyright">
          <p>&copy;2023 Creado por alumnos de Ingeniería Civil en Computación e Informática 2023</p>
      </div>
    </footer>
	<script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector("header");
			header.classList.toggle("abajo",window.scrollY>0);
		})
	</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>