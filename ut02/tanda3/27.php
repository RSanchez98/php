<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>27</title>
</head>
<body>
    <?php
        if(!isset($_POST['num']))
        {
    ?>
            <form action="27.php" method="post">
            <input type="number" name="num"><br>
            <input type="submit" value="Calcular">
            </form>
    <?php
        }
        else
        {
            $num = $_POST['num'];
            $contador = 0;
            $suma = 0;

            echo "Numeros: ";
            for($i = 1; $i <$num; $i++)
            {
                if($i % 3 == 0)
                {
                    echo "$i ";
                    $contador++;
                    $suma += $i;
                }
                
            }
            echo "<br>Cantidad: $contador";
            echo "<br>Suma: $suma";
        }
    ?>
    <br><br>
    <a href="27.php">Volver</a>
</body>
</html>