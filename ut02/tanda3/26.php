<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>26</title>
</head>
<body>
    <?php
        if(!isset($_POST['n']))
        {
    ?>      
            <form action="26.php" method="post">
            <input type="number" name="n"><br>
            <input type="number" name="pos" min="0" max="9"><br>
            <input type="submit" value ="Calcular">
            </form>
    <?php
        }
        else
        {
            $n = $_POST['n'];
            $digito = $_POST['digito'];
            $longitud = 0;
            $volteado = 0;
            $posicion = 1;

            echo "Contando de izquierda a derecha, el $digito aparece dentro de $n 
            en las siguientes posiciones: ";

            $numero = $n;

            if($numero==0)
            {
                $longitud = 1;
            }

            while($numero > 0)
            {
                $volteado = ($volteado * 10) + ($numero % 10);
                $numero = floor($numero/10);
                $longitud++;
            }
            while($volteado > 0)
            {
                if(($volteado % 10)==$digito)
                {
                    echo $posicion;
                }
                $volteado = floor($volteado/10);
                $posicion++;
            }
        }
        ?>
        <br><br>
        <a href="26.php">Volver</a>
</body>
</html>