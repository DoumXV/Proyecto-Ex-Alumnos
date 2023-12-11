<?php
include("../administrador/conexion.php");
$id_empleo=$_GET["id_empleo"];
$sql=$conexion->query("SELECT * FROM empleos WHERE id_empleo='$id_empleo'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ex alumnos UDA</title>
</head>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="../crud-empleos/crud-empleos.css">
<body>
	<header>
		<a href="../home/index.php" class="logo"><img class="logo-uda" src="../img/logo-udacorp-lineablanca.png" alt="Logo UDA"></a>
		<nav>
			<ul>
                <li><a class="linkeado" href="../panel-admin/panel-admin.php">Inicio</a></li>
				<li><a class="linkeado" href="">Eventos</a></li>
                <li><a class="linkeado" href="#">Alumnos</a></li>
                <li><a class="linkeado" href="crud-empleos.php">Empleos</a></li>
				<li><a class="linkeado" href="#">Peticiones</a></li>
                <li><a class="linkeado" href="../administrador/cerrar-sesion.php">Cerrar sesion</a></li>
			</ul>
		</nav>
	</header>
    <section class="zona1">
    </section>
    <section class="modificar d-flex flex-column align-items-center justify-content-center">
    <div class="col-md-5 my-5">
        <h5 class="text-center alert alert-secondary">Modificar Empleos</h5>
        <form method="POST" enctype="multipart/form-data">
            <div>
                <p>
                    Id de empleo a modificar: <?php echo $id_empleo ?>
                </p>
            </div>
            <input type="hidden" name="id_empleo" value="<?=$_GET["id_empleo"]?>">
            <?php 
            include("modificar-empleo.php");
            while($datos=$sql->fetch_object()){
            ?>
            <input type="text" class="form-control mb-3" name="titulo" placeholder="Titulo del empleo" value="<?=$datos->titulo?>">
            <input type="text" class="form-control mb-3" name="empresa" placeholder="Nombre de la empresa" value="<?=$datos->empresa?>">
            <input type="text" class="form-control mb-3" name="ciudad" placeholder="Ciudad"  value="<?=$datos->ciudad?>">
            <textarea class="form-control mb-3" name="descripcion" rows="3" placeholder="Descripicion del empleo"><?=$datos->descripcion?></textarea>
            <input type="text" class="form-control mb-3" name="sueldo" placeholder="Sueldo"  value="<?=$datos->sueldo?>">
            <input class="form-control mb-3" type="file" name="archivo" accept="image/*,.pdf" value="<?=$datos->archivo?>">
            <div>
                <p>
                    Dirección del archivo: <?php echo $datos->archivo ?>
                </p>
            </div>
            <div class="d-flex flex-row align-items-center justify-content-center">
                <button type="submit" class="btn m-3" style="background-color:#364c59; color:#fff;" name="btnmodificar" value="ok">Modificar empleo</button>
                <a href="crud-empleos.php" class="btn btn-danger">Salir de editar</a>
            </div>
            
            <?php
            }
            ?>
        </form>
    </div>
    </section>
    <footer>
        <div class="contenedor-footer">
            <div class="footer-logo">
                <img src="../img/logo-udacorp-lineablanca.png" alt="">
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
	<script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector("header");
			header.classList.toggle("abajo",window.scrollY>0);
		})
	</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>