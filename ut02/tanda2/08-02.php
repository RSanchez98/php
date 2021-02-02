<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>08-02</title>
</head>
<body>
    <?php
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];

        $media = round(($n1+$n2+$n3)/3,1);
        echo "Tienes un ", $media, " de media. <br>";
        if ($media <=4.9)
        {
            echo "Insuficiente";
        }
        if($media>=5.0 && $media<=5.9)
        {
            echo "Suficiente";
        }
        if($media>=6.0 && $media<=6.9)
        {
            echo "Bien";
        }
        if($media>=7.0 && $media<=8.9)
        {
            echo "Notable";
        }
        if($media>=9.0 && $media<=10.0)
        {
            echo "Sobresaliente";
        }
    ?>
    <br>
    <a href="08-01.php">Volver</a>
</body>
</html>