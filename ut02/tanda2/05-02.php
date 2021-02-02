<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05-02</title>
</head>
<body>
    <?php
        $a = $_POST['a'];
        $b = $_POST['b'];
        if($a==0)
        {
            echo "La ecuación no tiene solución real";
        }
        else
        {
            echo "x = ", (-$b / $a);
        }
    ?>
    <br>
    <a href="05-01.php">volver</a>
</body>
</html>