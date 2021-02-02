<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>25</title>
</head>
<body>
    <?php
        if (!isset($_POST['num']))
        {
    ?>
            <p>Introduce un numero para darle la vuelta</p>
            <form action="25.php" method="post">
            <input type="number" name="num"><br>
            <input type="submit" value="Continuar">
            </form>
    <?php
        }
        else
        {
            $n = $_POST['num'];
            $volteado = 0;
            $n = abs($n);

            while($n > 0)
            {
                $volteado = ($volteado * 10)+($n % 10);
                $n = floor($n/10);
            }
            if($n < 0)
            {
                $volteado =-$volteado;
            }
            echo $_POST['num']," al reves es $volteado";
        }
    ?>
    <br><br>
    <a href="25.php">Volver</a>
</body>
</html>