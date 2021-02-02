<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18</title>
</head>
<body>
    <?php
        if(!isset($_POST['n1']))
        {
    ?>
            <form action="18.php" method="post">
            Numero 1: <input type="number" name="n1"><br>
            Numero 2: <input type="number" name="n2"><br>
            <input type="submit" value="Calcular">
            </form>
    <?php
        }
        else
        {
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            if($n1 != $n2)
            {
                if($n1>$n2)
                {
                    $aux = $n1;
                    $n1 = $n2;
                    $n2 = $aux;
                }
                for($i = $n1; $i <= $n2; $i+=7)
                {
                    echo "$i ";
                }
            }
            else
            {
                echo "Los numeros son iguales";
            }
        }
    ?>
    <br>
    <a href="18.php">Volver</a>
</body>
</html>