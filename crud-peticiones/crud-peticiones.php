<?php
    session_start();
    if(empty($_SESSION['email_admin'])){
        header("Location:../log-admin/admin.php"); 
        }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Panel de control de Ex-Alumnos</title>
    <meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="crud-peticiones.css">
</head>

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
    </section >
    <section class="my-5 container">

       
        <table  class="table bg-white">
        <thead class="table-dark table-striped text-center">
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Contacto</th>
            <th>Descripcion</th>
            <th>Imagen</th>
            <th>Area de interes</th>
            <th>Trabajo actual</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            <?php
                include("../administrador/conexion.php");
               $sql=$conexion->query("SELECT * FROM peticiones");
                while($datos=$sql->fetch_object()){
            ?>

                    <tr class="text-center">
                    <td><?= $datos->id_peticion ?> </td>
                    <td><?= $datos->nombre_peticion?> </td>
                    <td><?= $datos->email_peticion ?></td>
                    <td><?= $datos->contacto_peticion?></td>
                    <td><?= $datos->descripcion_peticion?></td>
                    <td><img alt="" src="<?= $datos->direccion_imagen?>" class=" img-fluid" style="max-width:200px; max-height: 300px"></td>
                    <td><?= $datos->area_interes ?></td>
                    <td><?= $datos->trabajo_actual ?></td>
                    <td><a onclick="return aceptar()" href="comandos/aceptar.php?id=<?=$datos->id_peticion?>" class="btn btn-success">Aceptar</a></td>
                    <td><a onclick="return eliminar()" href="comandos/rechazar.php?id=<?=$datos->id_peticion?>" class="btn btn-danger">Rechazar</a></td>
                </tr>
            <?php 
                }
            ?>
        </tbody>
    </table>
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
    <script>
        function aceptar(){
            var respuesta=confirm("Estas seguro de aceptar el registro");
            return respuesta
        }
    </script>
    <script>
        function eliminar(){
            var respuesta=confirm("Estas seguro de eliminar el registro");
            return respuesta
        }
    </script>

    <script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector("header");
			header.classList.toggle("abajo",window.scrollY>0);
		})
	</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>