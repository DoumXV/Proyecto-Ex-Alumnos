<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <?php
            include "inicio-sesion.php";
        ?>
        <input type="text" name="email_admin" placeholder="email_admin">
        <input type="text" name="clave_admin" placeholder="clave_admin">
        <input type="submit" name="boton_enviar">
    </form>
</body>
</html>