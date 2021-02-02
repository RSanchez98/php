<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10</title>
</head>
<body>
    <?php
        $puntos = array('As' => 11, 'Dos' => 0, 'Tres' => 10, 'Cuatro' => 0, 
                'Cinco' => 0, 'Seis' => 0, 'Siete' => 0, 'Sota' => 2, 
                'Caballo' => 3, 'Rey' => 4);

        $palos = array ('Oro', 'Copas', 'Espadas', 'Bastos');

        $figura= array ('As', 'Dos', 'Tres', 'Cuatro', 'Cinco', 'Seis', 
                'Siete', 'Sota', 'Caballo', 'Rey');

        $cartasUsadas[]=" ";
        $contador = 0;
        $puntosTotales =0;

        do
        {
            $paloCarta = $palos[rand(0,3)];
            $figuraCarta = $figura[rand(0,9)];
            $puntosCarta = $puntos[$figuraCarta];
            $nombreCarta = "$figuraCarta de $paloCarta";
            if(!in_array($nombreCarta, $cartasUsadas))
            {
                echo "$nombreCarta - $puntosCarta puntos <br>";
                $cartasUsadas[] = $nombreCarta;
                $contador++;
                $puntosTotales += $puntosCarta;
            }
        }
        while ($contador < 10);
        echo "<br>Total: $puntosTotales puntos <br>";
    ?>
    <br><br>
    <a href="10.php">Volver</a>
</body>
</html>