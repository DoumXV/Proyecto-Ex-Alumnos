<!----------------------------Pagina de logueo del administrador----------------------------->
<!DOCTYPE html>
<html>
<head>
	<title>Logeo administrador</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <!---------------------------------Barra de navegacion---------------------------------->
	<header>
		<a href="../home/index.php" class="logo"><img class="logo-uda" src="../img/logo-udacorp-lineablanca.png" alt="Logo UDA"></a>
		<nav>
			<ul>
				<li><a class="linkeado" href="../home/index.php">Inicio</a></li>
				<li><a class="linkeado" href="../galeria/galeria.php">Galeria</a></li>
                <li><a class="linkeado" href="../empleos/empleos.php">Empleos</a></li>
				<li><a class="linkeado" href="#">Administrador</a></li>
			</ul>
		</nav>
	</header>
    <!-------------------------------------------------------------------------------------->

    <!--------------------Banner con imagen de pagina administrador------------------------->
    <section class="zona1"></section>
    <!-------------------------------------------------------------------------------------->

    <!---------------------------Seccion formulario de logeo-------------------------------->
    <section class="formulario-logeo">
        <section class="container-login">
            <div class="form">
                <h1 class="title-form">Iniciar Sesión</h1>
                <?php
                    include("../administrador/inicio-sesion.php");
                ?>
                <div class="form-content">
                    <form action="" method="post">
                        <div class="form-inputs">
                          <p class="text-form">Correo Electronico</p>
                          <input type="email" name="email_admin">
                          <p class="text-form">Contraseña</p>
                          <input type="password" name="clave_admin">
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto my-3 mt-5">
                            <input type="submit" style="background-color: #364c59; border: 1px solid black; box-shadow: 2rem; box-shadow: 0 10px 22px 0 rgba(0,0,0,0.2);" class="btn btn-primary" name="boton_enviar" value="Iniciar Sesion">
                        </div>
                        
                    </form>
                </div>
            </div>
        </section>
    </section>
    </section>
    <!-------------------------------------------------------------------------------------->

    <!--------------------------------------Footer------------------------------------------>
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