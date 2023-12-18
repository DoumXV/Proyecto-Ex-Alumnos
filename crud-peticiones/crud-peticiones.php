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
		<a href="../administrador/cerrar-sesion.php" class="logo"><img class="logo-uda" src="../img/logo-corp-diic-txtblanco.png" alt="Logo UDA"></a>
		<nav>
			<ul>
            <li><a class="linkeado" href="../panel-admin/panel-admin.php">Panel</a></li>
                <li><a class="linkeado" href="../administrador/cerrar-sesion.php">Cerrar sesion</a></li>
			</ul>
		</nav>
	</header>
    <section class="zona1">
    </section >


    <div class="tabla-filtros text-center">
        <h2 class="titulos mx-auto">Busquedas</h2>
        <div class="row">
            <div class="col-4 g-4">
                <input type="text" class="form-control text-center" id="inputBuscarCodigo" placeholder="Código" onkeyup="buscarTabla()" />
            </div>
            <div class="col-4 g-4">
                <input type="text" class="form-control text-center" id="inputBuscarNombre" placeholder="Nombre" onkeyup="buscarTabla()" />
            </div>
            <div class="col-4 g-4">
                <input type="text" class="form-control text-center" id="inputBuscarEmail" placeholder="Correo Institucional" onkeyup="buscarTabla()" />
            </div>
            <div class="col-4 g-4">
                <input type="text" class="form-control text-center" id="inputBuscarContacto" placeholder="Contacto" onkeyup="buscarTabla()" />
            </div>
            <div class="col-4 g-4">
                <input type="text" class="form-control text-center" id="inputBuscarArea" placeholder="Área de interés" onkeyup="buscarTabla()" />
            </div>
        </div>
    </div>


    <section class="my-5 container">
    <div class="table-responsive-sm">
        <table  class="table bg-white" id="tablaPeticiones">
        <thead class="table-dark table-striped text-center">
            <th class="p-3" scope="col">Codigo</th>
            <th class="p-3" scope="col">Nombre</th>
            <th class="p-3" scope="col">Email</th>
            <th class="p-3" scope="col">Contacto</th>
            <th class="p-3" scope="col">Descripcion</th>
            <th class="p-3" scope="col">Imagen</th>
            <th class="p-3" scope="col">Area de interes</th>
            <th class="p-3" scope="col">Trabajo actual</th>
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
                    <td><a onclick="return aceptar()" href="comandos/aceptar.php?id=<?=$datos->id_peticion?>" class="btn btn-success" style="background-color:#364c59; color:#fff; border:1px solid black;">Aceptar</a></td>
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
    <script src="../js/busquedas-peticiones.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>