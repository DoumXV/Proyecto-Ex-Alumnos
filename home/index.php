<!--------------Lista para separar los meses de la fecha de los eventos------------------>
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
<!--------------------------------Pagina de incio-------------------------------------->
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ex alumnos UDA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <!-------------------------------Barra de navegacion--------------------------------->
	<header>
		<a href="index.php" class="logo"><img class="logo-uda" src="../img/logo-corp-diic-txtblanco.png" alt="Logo UDA"></a>
		<nav>
			<ul>
				<li><a class="linkeado" href="#">Inicio</a></li>
				<li><a class="linkeado" href="../galeria/galeria.php">Galeria</a></li>
        <li><a class="linkeado" href="../empleos/empleos.php">Empleos</a></li>
				<li><a class="linkeado" href="../log-admin/admin.php">Administrador</a></li>
			</ul>
		</nav>
	</header>
<!-------------------------------------------------------------------------------------->

<!---------------------------Banner con imagen del DIICC-------------------------------->
  <section class="zona1">
    <div class="header-difuminado mx-auto"></div>
    <div class="header-difuminado2 mx-auto"></div>
    <div class="escape2">
            <h1 class="titulo2">Pagina Ex Alumnos</h1>
            <p>Universidad de Atacama</p>
    </div>
  </section>
  <!------------------------------------------------------------------------------------>

<!---------------------------Tarjetas de alumnos destacados-------------------------------->

    <section class="recientes h-auto">
      <h2 class="titulos container-fluid text-center">Ex-Alumnos destacados</h2>
      <div class="tarjetas row justify-content-center align-content-center">
        <div class="g-5 col-xl-4 col-lg-6 col-md-7">
          <div class="box flip-card me-5">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="../img/foto-individual-para-foto-de-perfil-de-equipo-de-p-upscaled (1).png" alt="Avatar" style="width:300px;height:300px;">
                <h1>Violeta Rodriguez</h1>
              </div>
              <div class="flip-card-back">
                <h1>Violeta Rodriguez</h1>
                <p>+56 9 8291 1314</p>
                <p>Analisis de Datos</p>
                <a type="button" class="btn btn-dark" href="../galeria/galeria.php">Mas informacion</a>
              </div>
            </div>
          </div>
        </div>
        <div class="g-5 col-xl-4 col-lg-6 col-md-7">
          <div class="flip-card me-5">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="../img/foto-individual-para-foto-de-perfil-de-equipo-de-p-upscaled (2).png" alt="Avatar" style="width:100%; height: 300px; object-fit: cover; ">
                <h1>Vicente Jaramillo</h1>
              </div>
              <div class="flip-card-back">
                <h1>Vicente Jaramillo</h1>
                <p>+56 9 5806 6626</p>
                <p>Inteligencia Artificial</p>
                <a type="button" class="btn btn-dark" href="../galeria/galeria.php">Mas informacion</a>
              </div>
            </div>
          </div>
        </div>
        <div class="g-5 col-xl-4 col-lg-6 col-md-7">
          <div class="flip-card me-5">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="../img/foto-individual-para-foto-de-perfil-de-equipo-de-p-upscaled (3).png" alt="Avatar" style="width:300px;height:300px;">
                <h1>Andrea Gonzalez</h1>
              </div>
              <div class="flip-card-back">
                <h1>Andrea Gonzalez</h1>
                <p>+56 9 8172 5323</p>
                <p>Tecnologias de la Información</p>
                <a type="button" class="btn btn-dark" href="../galeria/galeria.php">Mas informacion</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-------------------------------------------------------------------------------------->
    <!------------------------------Seccion de eventos-------------------------------------->
    <section class="calendario">
      <h2 class="titulos2 container-fluid text-center">Eventos</h2>
      <div class="tarjetas row justify-content-center align-content-center">
        <?php while($registros=$query->fetch_object()){ ?>
            <!-- Modal --> 
            <?php
              $modalID = "modal_" . preg_replace("/[^a-zA-Z0-9]/", "_", $registros->id_evento);
            ?>
            <div class="modal fade" id="<?php echo $modalID; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">                
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel"><?php echo $registros->nombre_evento; ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <img class="img-thumbnail mx-auto d-block" src="<?php echo $registros->direccion_imagen ?>" alt="">
                    </div>
                </div>
                </div>
            </div>
          <!--Tarjetas Eventos-->
            <div class="col-xxl-3 g-5 col-xl-4 col-lg-6 col-md-7">
            <div class="card1 card text-center h-auto mx-auto" style="border: 1px solid black;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
              <div class="card-header" style="background-color: #364c59; color: white;">
                <h3><?php echo $registros->nombre_evento; ?></h3>
              </div>
              <div class="card-body h-auto">
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
                  echo "<div class='mes'><p>$meses[$mes]</p></div>
                        </div>";
                  echo "<div class='ini'>";
                  echo "<img src='../img/clock-regular.svg'>";
                  echo "<p>Inicio: $hora</p>
                        </div>";
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
                    echo "<p>Final: $hora_final</p>
                          </div>"; 
                  ?>
                </div>
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#<?php echo $modalID; ?>">
                      Mas informacion
                    </button>
              </div>
            </div>
            </div>
        <?php } ?>
      </div>
    </section>
    <!-------------------------------------------------------------------------------------->
    <!-----------------------Seccion formulario para ex-alumnos----------------------------->

    <section class="formulario-caja">
      <h2 class="titulos2 container-fluid text-center">Formulario</h2>
      <p class="text-center mt-5" style="font-family: Montserrat;font-size: 20px;">¿Quieres ser parte de nuestra galeria de ex-alumnos del departamento de Ingenieria civil en computacion e Informática?</p>
      <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="d-flex flex-column justify-content-center align-items-center my-5 w-75">
            <?php
              include("../formulario-ex-alumnos/descripcion.php");
            ?>
          <form action="" class="w-75" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="nombre_peticion" class="form-label">Nombre Completo</label>
              <input type="text" id="nombre_peticion" class="form-control" name="nombre_peticion">
            </div>
            <div class="mb-3">
              <label for="email_peticion" class="form-label">Correo Institucional</label>
              <input type="email" id="email_peticion" class="form-control" name="email_peticion">
            </div>
            <div class="mb-3">
              <label for="contacto_peticion" class="form-label">Numero de contacto</label>
              <input type="tel" id="contacto_peticion" class="form-control" name="contacto_peticion">
            </div>
            <div class="mb-3">
              <label for="area" class="form-label">Area de interes</label>
              <input type="text" id="area" class="form-control" name="area">
            </div>
            <div class="mb-3">
              <label for="trabajo" class="form-label">Trabajo actual</label>
              <input type="text" id="trabajo" class="form-control" name="trabajo">
            </div>
            <div class="mb-3">
              <label for="descripcion_peticion" class="form-label">Descripcion del ex-alumno</label>
              <textarea class="form-control" name="descripcion_peticion" id="descripcion_peticion" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label for="formFile" class="form-label">Foto de ex-alumno</label>
              <input class="form-control" type="file" id="formFile" name="imagen_peticion" accept="image/png, image/jpeg">
            </div>
            <button onclick="return confirmar()" type="submit" class="btn btn-primary" style="background-color: #364c59; border: 1px solid black; font-family: Montserrat;" name="enviar_peticion">Enviar</button>
          </form>
        </div>
      </div>
    </section>
    <!-------------------------------------------------------------------------------------->
    <!---------------------------------------Footer----------------------------------------->
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
                    <li class="mt-4"><a href="https://diicc.uda.cl/academicos.php">Académicos</a></li>
                    <li class="mt-1"><a href="https://diicc.uda.cl/noticias.php">Noticias</a></li>
                    <li class="mt-1"><a href="https://www.moodle.uda.cl/">Moodle</a></li>
                    <li class="mt-1"><a href="https://www.instagram.com/diicc_uda/">Instagram</a></li>
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
    <!-------------------------------------------------------------------------------------->

  <!------------------------Script para doble confirmacion-------------------------------->
  <script>
      function confirmar(){
          var respuesta=confirm("¿Estas seguro de que los datos estan correctos?");
          return respuesta
      }
  </script>
  <!-------------------------------------------------------------------------------------->

  <!------------------------Script para el scroll de la nav-bar--------------------------->
	<script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector("header");
			header.classList.toggle("abajo",window.scrollY>0);
		})
	</script>
  <!-------------------------------------------------------------------------------------->
  
  <!------------------------Script para el bootstrap-------------------------------------->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-------------------------------------------------------------------------------------->
</body>
</html>