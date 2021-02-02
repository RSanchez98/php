<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01</title>
</head>
<body>
    <?php
        for($i = 0; $i<=100;$i++)
        {
            $numero[] = rand(0,100);
        }

        foreach($numero as $elementos)
        {
            $cuadrado[]=$elementos * $elementos;
            $cubo[] = $elementos * $elementos * $elementos;
        }
    ?>
        <table>
        <tr><td>Número</td><td>Cuadrado</td><td>Cubo</td></tr>
    <?php
        for($i=0; $i<=20; $i++)
        {
            echo "<tr><td>",$numero[$i],"</td>";
            echo "<td>",$cuadrado[$i],"</td>";
            echo "<td>",$cubo[$i],"</td></tr>";
        }
    ?>
        </table>
    <br><br>
    <a href="01.php">Recargar</a>
</body>
</html>