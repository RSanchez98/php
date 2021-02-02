<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>13-02</title>
</head>
<body>
    <?php
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];
        

        if($n1>$n2)
        {
            $mayor = $n1;
            $n1 = $n2;
            $n2 = $mayor;
        }
        if($n2>$n3)
        {
            $mayor = $n2;
            $n2 = $n3;
            $n3 = $mayor;
        }
        if($n1 > $n2)
        {
            $mayor = $a;
            $a = $b;
            $b=$mayor;
        }
        echo "Los numeros ordenados son ", $n1, " ", $n2," ", $n3;
    ?>
    <br><br>
    <a href="13-01.php">Volver</a>
</body>
</html>