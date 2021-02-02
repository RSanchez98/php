<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>08</title>
</head>
<body>
    <?php
        if(!isset($_POST['num']))
        {
    ?>
            <p>Por favor introduzca un numero del 0 al 10</p>
            <form action="08.php" method="post">
                <input type="number" name="num" min="0" max="10"><br>
                <input type="submit" value="Aceptar">
            </form>
        
    <?php
        }
        else
        {
            echo "<table>";
            $n = $_POST['num'];
            echo "Tabla del $n <br>";
            for($i = 0; $i <= 10; $i++)
            {
                echo "<tr><td> $n x $i = ",$n*$i,"</td></tr>";
            }
            echo "</table>";
        }
    ?>
    <a href="08.php">Volver</a>
</body>
</html>