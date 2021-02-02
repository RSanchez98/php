<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07</title>
</head>
<body>
    <?php
    //GENERA NUMERO ALEATORIO
        for($i = 0; $i < 20; $i++)
        {
            $numero[$i] = rand(0,100);
        }

    //MUESTRA INDICE
        echo "Array original: <br>";
        echo "<table> <tr>";
        for($i = 0; $i < 20; $i++)
        {
            echo "<td>$i</td>";
        }
        echo "</td>";

    //MUESTRA NUMEROS ALEATORIOS    
        echo "<tr>";
        for($i = 0; $i < 20; $i++)
        {
            echo "<td>$numero[$i]</td>";
        }
        echo"</tr></table><br>";

    //GUARDA PARES E IMPARES EN ARRAYS SEPARADAS
    $contPares = 0;
    $conImpares = 0;

    for($i = 0; $i < 20; $i++)
    {
        if($numero[$i] % 2 == 0)
        {
            $pares[$contPares] = $numero[$i];
            $contPares++;
        }
        else
        {
            $impares[$conImpares] = $numero[$i];
            $conImpares++;
        }
    }
    //GUARDA LOS DATOS EN EL ARRAY ORIGINAL
    for($i = 0; $i<$contPares; $i++)
    {
        $numero[$i] = $pares[$i];
    }
    for($i = $contPares; $i<$contPares+$conImpares; $i++)
    {
        $numero[$i] = $impares[$i - $contPares];
    }

    //MOSTRAR ARRAY
    echo "El array ordenado es: ";
    echo "<table><tr>";
    for($i = 0; $i < 20; $i++)
        {
            echo "<td>$i</td>";
        }
        echo "</tr>";

    for($i = 0; $i < 20; $i++)
        {
            echo "<td>$numero[$i]</td>";
        }
        echo "</tr></table>";
    ?>
    <br><br>
    <a href="07.php">Volver</a>
</body>
</html>