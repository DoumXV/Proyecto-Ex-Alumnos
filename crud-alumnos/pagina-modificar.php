<?php
    session_start();
    if(empty($_SESSION['email_admin'])){
        header("Location:../log-admin/admin.php"); 
        }
?>
<?php
include("../administrador/conexion.php");
$email=$_GET["email_usuario"];
$sql=$conexion->query("SELECT * FROM alumnos WHERE email_usuario='$email'");
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
                <li><a class="linkeado" href="../panel-admin/panel-admin.php">Panel</a></li>
                <li><a class="linkeado" href="../administrador/cerrar-sesion.php">Cerrar sesion</a></li>
			</ul>
		</nav>
	</header>
    <section class="zona1">
    </section>
    <section class="modificar d-flex flex-column align-items-center justify-content-center">
    <div class="col-md-5 my-5">
        <h5 class="text-center alert alert-secondary">Modificar Ex-alumnos</h5>
        <form method="POST" enctype="multipart/form-data">
            <div class='alert alert-info'>
                <p>
                    Email de alumno a modificar: <?php echo $email ?>
                </p>
            </div>
            <?php 
            include("modificar-alumnos.php");
            while($datos=$sql->fetch_object()){
            ?>
            <label for="titulo" class="form-label">Nombre</label>
            <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?=$datos->nombre_usuario?>">
            <label for="titulo" class="form-label">Email</label>
            <input type="text" class="form-control mb-3" name="email" placeholder="Correo Institucional" value="<?=$datos->email_usuario?>">
            <label for="titulo" class="form-label">Fecha de egreso</label>
            <input type="date" class="form-control mb-3" name="fecha" placeholder="Nombre" value="<?=$datos->fecha_egreso?>">
            <label for="titulo" class="form-label">Area de interes</label>
            <input type="text" class="form-control mb-3" name="area" placeholder="Area de interes" value="<?=$datos->area_interes?>">
            <label for="titulo" class="form-label">Descripcion</label>
            <textarea class="form-control mb-3" name="descripcion" rows="3" placeholder="Descripicion del Alumno"><?=$datos->descripcion?></textarea>
            <label for="titulo" class="form-label">Trabajo actual</label>
            <input type="text" class="form-control mb-3" name="trabajo" placeholder="Trabajo actual" value="<?=$datos->trabajo_actual?>">
            <label for="titulo" class="form-label">Contacto</label>
            <input type="text" class="form-control mb-3" name="contacto" placeholder="Contacto" value="<?=$datos->contacto?>">
            <label for="titulo" class="form-label">Imagen</label>
            <input type="file" class="form-control mb-3" name="img"  accept="image/png, image/jpeg">
            <div><?php echo $datos->direccion_imagen ?></div>
           
            <div class="d-flex flex-row align-items-center justify-content-center">
                <button type="submit" class="btn m-3" style="background-color:#364c59; color:#fff;" name="btnmodificar" value="ok">Modificar Alumnos</button>
                <a href="crud-alumnos.php" class="btn btn-danger">Salir sin editar</a>
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