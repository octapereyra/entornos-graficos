<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    function comprobar_nombre_usuario($nombre_usuario)
    {
    if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20)
        { echo $nombre_usuario . " no es válido<br>"; return false; } 
        
        $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_"; 
        for ($i=0; $i<strlen($nombre_usuario); $i++){ if (strpos($permitidos, substr($nombre_usuario,$i,1))===false)            
            { echo $nombre_usuario . " no es válido<br>"; return false; } }
             
        echo $nombre_usuario . " es válido<br>"; return true; 
    }
    ?>
</head>
<body>
<?php
    echo "Ingrese su nombre de usuario:";
?>
<form method="get">
    <input type="text" name="nombre"/>
    <button type="submit">Aceptar</button>
</form>
<?php
    if (isset($_GET['nombre'])) {
        comprobar_nombre_usuario($_GET['nombre']);
    } 
?>
    
</body>
</html>
