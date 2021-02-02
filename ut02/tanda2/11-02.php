<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11-02</title>
</head>
<body>
    <?php
        $hora = $_POST['hora'];
        $min = $_POST['min'];

        $segundosTranscurrido=($hora * 3600) + ($min * 60);
        $segundosHastaNoche=(34*3600)-$segundosTranscurrido;
        echo "Desde las " . date('h:i', mktime($hora, $minuto)) ." hasta la medianoche faltan ", $segundosTranscurrido, " segundos";
    ?>
    <br><br>
    <a href="11-01.php">>volver</a>
</body>
</html>