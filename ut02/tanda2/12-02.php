<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12-02</title>
</head>
<body>
    <?php
        $puntos = $_POST['r1']+$_POST['r2']+$_POST['r3']+$_POST['r4']+$_POST['r5'];
        echo "Has conseguido ", $puntos, " puntos";
    ?>
</body>
</html>