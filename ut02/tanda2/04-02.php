<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04-02</title>
</head>
<body>
    <?php
        $horas = $_POST['horas'];
        if($horas <=40)
        {
            echo "Ganas ", $horas*12, "€ a la semana";
        }
        else
        {
            if($horas >40)
            {
                echo "Ganas ", $horas*16, "€ a la semana";
            }
        }
    ?>
    <br>
    <a href="04-01.php">Volver</a>
</body>
</html>