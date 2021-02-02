<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10</title>
</head>
<body>
    <?php
        if(!isset($_POST['num']))
        {
            $num = 0;
            $total = 0;
            $cuantaNum=0;
        }
        else
        {
            $num = $_POST['num'];
            $total = $_POST['total'];
            $cuentaNum = $_POST['cuentaNum'];
        }
        if ($num >= 0)
        {
            $total += $num;
            $cuentaNum++;
            ?>
            <p>Calcular la media (introducir un numero negativo para calcular)</p>
            <form action="10.php" method="post">
                <input type="number" name="num" autofocus>
                <input type="hidden" name="total" value="<?php echo $total?>">
                <input type="hidden" name="cuentaNum" value ="<?php echo $cuentaNum?>">
                <input type="submit" value="Continuar">
            </form>

        <?php
        }
        else
        {
        ?>
            <p>La media de los numeros introducidos es <?php echo $total/($cuentaNum-1);?></p>
            <br>
            <a href="10.php">Volver</a>
        <?php
        }
        ?>
</body>
</html>