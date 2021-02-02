<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>29</title>
</head>
<body>
    <?php
        if (!isset($_POST['numeroGrande']))
        {
    ?>
            <form action="29.php" method="post">
                <p>Numero grande: </p>
                <input type="number" name="numGrande" min="0" autofocus="" required=""><br>
                <p>Numero pequeño:</p>
                <input type="number" name="numPequeño" min="0" required=""><br><br>
                <input type="submit" value="Aceptar">
            </form>
    <?php
        }
        else
        {
            $numGrande = $_POST['numGrande'];
            $numPequeño = $_POST['numPequeño'];
            
            echo "Los numeros enteros positivos menos que $numGrande";
            echo " que no son divisibles entre $numPequeño son: <br>";

            for ($i = 1; $i<$numGrande; $i++)
            {
                if(($i % $numPequeño )!= 0)
                {
                    echo "$i ";
                }
            }
        }    
    ?>
    <br><br>
    <a href="29.php">>> Volver</a>
</body>
</html>