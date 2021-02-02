<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07-02</title>
</head>
<body>
    <?php
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];

        $media = round(($n1+$n2+$n3)/3,1);
        echo $media;
    ?>
    <br>
    <a href="07-01.php">Volver</a>
</body>
</html>