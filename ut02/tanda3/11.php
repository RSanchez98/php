<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11</title>
</head>
<body>
    <?php
        if(!isset($_POST['num']))
        {
            ?>
            <p>Introduce un numero para calcular su cubo y cuadrado y los 4 numeros siguientes a partir de ese</p>
            <form action="11.php" method="post">
                <input type="number" name="num" autofocus>
                <input type="submit" value="Calcular">
            </form>
            <?php
        }
        else
        {
            $num = $_POST['num'];
            for($i = $num; $i <= $num+5; $i++)
            {
                echo "<table>
                
                    <tr>
                        <td>$i<sup>2</sup> =", $i*$i,"</td>
                        <td>$i<sup>3</sup> =",$i*$i*$i,"</td>
                    </tr>
                    
                    </table>";
            }
        }
        ?>
        <style>
            table, th, td
            {
                border: 1px solid black;
                border-collapse : collapse;
                width: 30%;
            }
        </style>
        <a href="11.php">Volver</a>
</body>
</html>