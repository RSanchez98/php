<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02-02</title>
</head>
<body>
    <?php
        $hora = $_POST['hora'];
        if($hora>=6 && $hora <=12)
        {
            echo "Buenos dias!";
        }
        else
        if($hora >=13 && $hora <=20)
        {
            echo "Buenas tardes!";
        }
        else
        {
            echo "Buenas noches!";
        }
    ?>
    <br>
        <a href="02-01.php">Volver</a>
</body>
</html>