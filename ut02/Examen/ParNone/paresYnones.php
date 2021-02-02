<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pares y nones</title>
    <style>
        
        body {
        padding: 0 20px;
        background-color: #F6F6FF;
        font-family: sans-serif;
        text-align: center;
        }

        h1 {
        margin: 10px;
        font-size: 150%;
        text-align: center;
        text-transform: uppercase;
        }

        h2 {
        font-size: 125%;
        }

        fieldset {
        border: #8686FF 3px solid;
        padding: 10px 20px 20px;
        background-color: #E6E6FF;
        }

        legend {
        border: #8686FF 3px solid;
        padding: 0 10px;
        background-color: white;
        font-size: 120%;
        }

        input {
        font-size: 100%;
        }

        .aviso {
        color: red;
        }

        .grande {
        font-size: 200%;
        }

        .derecha {
        text-align: right;
        }

        table.conborde, table.conborde td, table.conborde th {
        border: black 1px solid;
        }

        footer {
        border-top: black 1px solid;
        margin-top: 2em;
        }

        footer cite {
        font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    if(!isset($_POST['nAleat']))
    {
        $nAleat1 = rand(0,5);
        $nAleat2 = rand(0,5);
        $suma = $nAleat1+$nAleat2;
    }
    else
    {
        $nAleat1 = rand(0,5);
        $nAleat2 = rand(0,5);
        $suma = $nAleat1+$nAleat2;
    }
    
    echo "<h1>Pares y Nones</h1>";
    if($nAleat1 == 0||$nAleat2 == 0)
    {
        echo "<img src=\"0.jpeg\">";
        if($nAleat1 == $nAleat2)
        {
            echo "<img src=\"0.jpeg\">";
        }
    }
    
    if($nAleat1 == 1||$nAleat2 == 1)
    {
        echo "<img src=\"1.jpeg\">";
        if($nAleat1 == $nAleat2)
        {
            echo "<img src=\"1.jpeg\">";
        }
    }
    
    if($nAleat1 == 2||$nAleat2 == 2)
    {
        echo "<img src=\"2.jpeg\">";
        if($nAleat1 == $nAleat2)
        {
            echo "<img src=\"2.jpeg\">";
        }
    }

    if($nAleat1 == 3||$nAleat2 == 3)
    {
        echo "<img src=\"3.jpeg\">";
        if($nAleat1 == $nAleat2)
        {
            echo "<img src=\"3.jpeg\">";
        }
    }

    if($nAleat1 == 4||$nAleat2 == 4)
    {
        echo "<img src=\"4.jpeg\">";
        if($nAleat1 == $nAleat2)
        {
            echo "<img src=\"4.jpeg\">";
        }
    }

    if($nAleat1 == 5||$nAleat2 == 5)
    {
        echo "<img src=\"5.jpeg\">";
        if($nAleat1 == $nAleat2)
        {
            echo "<img src=\"5.jpeg\">";
        }
    }

    
    if($suma % 2 == 0)
    {
        echo "<h2>Jugador 1</h2>";
        //echo "<br>Gana el jugador 1 <br>";
        echo "<img src=\"gana.jpeg\">";

        echo "<h2>Jugador 2</h2>";
        //echo "Pierde jugador 2";
        echo "<img src=\"pierde.jpeg\">";
    }
    
    if($suma % 2 != 0)
    {
        echo "<h2>Jugador 2</h2>";
        //echo "<br>Gana el jugador 2 <br>";
        echo "<img src=\"pierde.jpeg\">";
        
        echo "<h3>Jugador 1</h3>";
        //echo "Pierde jugador 1";
        echo "<img src=\"gana.jpeg\">";
    }
    

    ?>
    <form action="paresYnones.php" method="post">
        <input type="hidden" name="j1"><br>
        <input type="hidden" name="j2"><br>
        <input type="hidden" name="nAleat1" value="<?php echo $nAleat1; ?>">
        <input type="hidden" name="nAleat2" value="<?php echo $nAleat2; ?>">
        <input type="hidden" name="suma"2 value="<?php echo $suma; ?>">
        <input type="submit" value="Volver a jugar">

    </form>
    <footer>
        <p>Rodrigo Sánchez Valle</p>
    </footer>
</body>
</html>