<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06-02</title>
</head>
<body>
    <?php
        $h = $_POST['h'];

        echo "El objeto tarda ", round(sqrt(2*$h/9.81),2) , " segundos en caer";
    ?>
    <br>
    <a href="06-01.php">Volver</a>
</body>
</html>