<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11</title>
</head>
<body>
    <form action="11.php" method="get">
        Palabra en español: 
        <input type="text" name ="palabra" autofocus="" required="">
        <input type="submit" value="Buscar">
    </form>
    <?php
        if(isset($_GET['palabra']))
        {
            $palabra = $_GET['palabra'];

            $diccionario = array 
            (
                "ordenador" => "computer",
                "gato" => "cat",
                "rojo" => "red",
                "árbol" => "tree",
                "pingüino" => "penguin",
                "sol" => "sun",
                "agua" => "water",
                "viento" => "wind",
                "siesta" => "siesta",
                "arriba" => "up",
                "ratón" => "mouse",
                "estadio" => "arena",
                "calumnia" => "aspersion",
                "aguacate" => "avocado",
                "cuerpo" => "body",
                "concurso" => "contest",
                "cena" => "dinner",
                "salida" => "exit",
                "lenteja" => "lentil",
                "cacerola" => "pan",
                "pastel" => "pie",
                "membrillo" => "quince",
                "te quiero" => "i love you"
            );

            foreach($diccionario as $clave => $valor)
            {
                $palabraEsp[]=$clave;
            }
            if(in_array($palabra, $palabraEsp))
            {
                echo "$palabra en inglés es ", $diccionario[$palabra];
            }
            else
            {
                echo "No conozco esa palabra";
            }
        }
    ?>
    <br><br>
    <a href="11.php">Volver</a>
</body>
</html>