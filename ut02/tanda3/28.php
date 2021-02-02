<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>28</title>
</head>
<body>
    <?php
        if(!isset($_POST['num']))
        {

    ?>
            <form action="28.php" method="post">
            <input type="number" name="num"> <br>
            <input type="submit" value="Calcular">
            </form>
    <?php
        }
        else
        {
            $num = $_POST['num'];
            $multi = 1;
            
            $aux = $num;

            echo"!$num = ";

            for($i = 1; $i<=$num; $i++)
            {
                echo $aux,"*";
                $aux--;

                
                
                $multi = $multi *$i;
            }
            echo "= $multi";
        }
    ?>
    <a href="28.php">Volver</a>
</body>
</html>