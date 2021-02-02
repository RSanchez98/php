<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>14-02</title>
</head>
<body>
    <?php
        $num = $_POST['num'];

        if($num % 2)
        {
            echo "El numero ",$num," es impar";
        }
        else
        {
            echo "El numero ",$num," es par";
        }
        if($num % 5)
        {
            echo " y no es divislible entre 5";
        }
        else
        {
            echo " y es divisible entre 5";
        }
    ?>
    <br><br>
    <a href="14-01.php">Volver</a>
</body>
</html>