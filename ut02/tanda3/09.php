<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09</title>
</head>
<body>
    <?php
        if(!isset($_POST['num']))
        {
            ?>
            <p>Introduce un numero para saber cuantas cifras tiene</p>
            <form action="09.php" method="post">
            <input type="number" name="num">
            <input type="submit" value="Calcular">
            </form>
        <?php
        }
        else
        {
            $num = $_POST['num'];
            $cantidad = strlen($num);
            echo "El numero $num tiene $cantidad cifras";
        }
        ?>
    
</body>
</html>