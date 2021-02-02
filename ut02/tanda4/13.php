<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>13</title>
</head>
<body>
    <?php
    //NUM ALEATORIOS Y NO SE REPITEN
        $i = 0;
        $lineal=[];
        do
        {
            $n = rand(100, 999);
            if(!in_array($n, $lineal))
            {
                $lineal[] = $n;
                $i++;
            }
        }
        while($i < 54);
        

        //COLOCAR EN ARRAY  DE 9*6 Y CALCULA COORDENADAS
        $minimo = 999;
        $i = 0;
        for($x = 0; $x < 6; $x++)
        {
            for($y = 0; $y < 9; $y++)
            {
                $numero[$x][$y] = $lineal[$i];
                $i++;
                if($numero[$x][$y] < $minimo)
                {
                    $minimo = $numero[$x][$y];
                    $xMin = $x;
                    $yMin = $y;
                }
            }
        }

        echo "<table>";
        for($x = 0; $x < 6; $x++)
        {
            echo "<tr>";
            for($y = 0; $y < 9; $y++)
            {
                if($numero[$x][$y] == $minimo)
                {
                    echo "<td><span style='color:blue;'>".$numero[$x][$y]."</span></td>";
                }
                else if(abs((abs($x)-abs($xMin))) == abs((abs($y)-abs($yMin))))
                {
                    echo "<td><span style='color:green;'>".$numero[$x][$y]."</span></td>";
                }
                else 
                {
                    echo "<td><span style='color:pink;'>".$numero[$x][$y]."</span></td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
    <br><br>
    <a href="13.php">Volver</a>
    
</body>
</html>