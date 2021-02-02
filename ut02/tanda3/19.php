<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>19</title>
</head>
<body>
    <?php
        if(!isset($_POST['num']))
        {
    ?>
            <form action="19.php" method="post">
            Altura de la piramide <input type="number" name="num"> <br>
            <input type="submit" value="Goes!">
            </form>
    <?php
        }
        else
        {
            $alto = $_POST['num'];

            for($i = 1; $i<=$alto; $i++)
            {
                for($j = 1; $j<=$i; $j++)
                {
                    echo "*";
                }
                for($j = 1; $j<=$i; $j++)
                {
                    echo " ";
                }
                echo"<br>";
            }
        }
    ?>
    <a href="19.php">Volver</a>
</body>
</html>