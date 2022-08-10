<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario enviado por el metodo GET</h1>
    <form action="envia-datos.php" method="get">
        <label for="">Ingresa tu nombre:</label>
        <input type="text" name="nombre_txt">
        <br><br>
        <label for="">Ingresa tu Password</label>
        <input type="password" name="password_txt">
        <br><br>
        <input type="submit" name="enviar_btn" value="Envia-Get">
    </form>

    <h1>Formulario enviado por el metodo POST</h1>
    <form action="envia-datos.php" method="post">
        <label for="">Ingresa tu nombre:</label>
        <input type="text" name="nombre_txt">
        <br><br>
        <label for="">Ingresa tu Password</label>
        <input type="password" name="password_txt">
        <br><br>
        <input type="submit" name="enviar_btn" value="Envia-POST">
    </form>
</body>
</html>

<?php
/*
Cuando estemos trabajamdo con una BD usamos el metodo POST, que encripta los datos
Cuando se hagan busquedas usamos el metodo GET
*/
?>