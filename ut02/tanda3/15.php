<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>15</title>
</head>
<body>
    <?php
        if(!isset($_POST['base']))
        {
    ?>
            <form action="15.php" method="post">
            Base: <input type="number" name="base">
            <br>
            Exponente <input type="number" name="exponente">
            <br>
            <input type="submit" value="Calcular">
            </form>
    <?php
        }
        else
        {
            $base = $_POST['base'];
            $exponente = $_POST['exponente'];
        
            for($i = 0; $i<=$exponente; $i++)
            {
                $potencia = 1;
                $expoFin = $i;
                for($j = 0; $j <=$exponente; $j++)
                {
                    $potencia*=$expoFin;
                }
                echo "$base <sup>$expoFin</sup> = $potencia <br>";
            }
        }   
    ?>
    <br>
    <a href="15.php">Volver</a>
</body>
</html>