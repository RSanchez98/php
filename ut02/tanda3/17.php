<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17</title>
</head>
<body>
    <?php
        if(!isset($_POST['num']))
        {
    ?>
            <form action="17.php" method="post">
            Numero: <input type="number" name="num" min = "0">
            <input type="submit" value="Calcular">
            </form>
    <?php
        }
        else
        {
            $num = $_POST['num'];
            $suma = 0;
            for($i = $num+1; $i<$num+101; $i++)
            {
                $suma += $i;
            }
            echo "La suma de los 100 números enteros siguientes a $n es $suma";
        }
    ?>
</body>
</html>