
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de session-administrador</title>
</head>
<body>
    <?php
    
    include("inicio-sesion.php");
    ?>
    <form action="" method="post">
        <input type="text" name="email_admin" placeholder="email">
        <input type="password" name="clave_admin" placeholder="clave">
        <br>
        <button type="submit" name="boton_enviar">enviar</button>
    </form>
</body>
</html>