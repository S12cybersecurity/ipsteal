<?php
/**
 * Get and save a visitor's IP in PHP
 *
 * @author parzibyte/s12
 */
# To get the correct date you have to put the time zone
 date_default_timezone_set("America/Mexico_City");
$fechaYHora = date("Y-m-d H:i:s");
# If there is no REMOTE_ADDR then we put "Unknown"
$ip = empty($_SERVER["REMOTE_ADDR"]) ? "Desconocida" : $_SERVER["REMOTE_ADDR"];
# Format message
$mensaje = sprintf("La IP %s accedió en %s%s", $ip, $fechaYHora, PHP_EOL);
# And attach it or write it in ips.txt
file_put_contents("ips.txt", $mensaje, FILE_APPEND);
# We already registered the ip, now we continue with the normal flow;)
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido a mi página</title>
</head>
<body>
    Hola mundo
</body>
</html>


