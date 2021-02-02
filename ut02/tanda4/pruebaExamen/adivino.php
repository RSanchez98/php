<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinaaas</title>
    <style>
    body {
        text-align: center;
        background-color: rgb(118, 183, 245);
        font-size: 1.3em;
    }

    </style>
</head>
<body>
    <h1>Adivino</h1>
    <p><strong>Tengo un numero en mente... a ver si sabes cual es</strong></p>
    <p>El numero debe estar entre 1 y 100</p>
    <?php
        if(!isset($_POST['numeroUsuario']))
        {
            $numeroUsuario = " ";
            $numeroAleatorio = rand(1, 100);
            $listaNum=[];
            $contador = 0;
        }
        else
        {
            $numeroUsuario=(int)$_POST['numeroUsuario'];
            $numeroAleatorio = $_POST['numeroAleatorio'];
            $contador = $_POST['contador'];
            $listaNum[] = $_POST['listaNum'];
        }
        //echo $numeroAleatorio;
        
        if($numeroUsuario == $numeroAleatorio)
        {
            echo "<h2 syle='color: green'>ENHORABUENA, ", $numeroAleatorio," ERA EL NUMERO!! </h2>";
            $contador++;
            echo "<p>Lo has adivinado en ",$contador," intentos!</p>";

            echo "<p><a href='adivino.php'>Volver</a></p>";
        }
        else
        {
            if($numeroUsuario < 0)
            {
                echo "<p style = 'color: red'>El numero debe ser positivo</p>";
            }
            else
            {
                if($numeroUsuario == " ")
                {
                    echo "<h3>Debes escribir un numero</h3>";
                }
                else
                {
                    if($numeroUsuario < $numeroAleatorio)
                    {
                        echo "<p style = 'color: red'>Demasiado pequeño</p>";
                        $contador++;
                        echo "Intento nº ",$contador;

                    }
                    else
                    {
                        echo "<p style = 'color: red'>Demasiado grande</p>";
                        $contador++;
                        echo "Intento nº ",$contador;
                    }
                }
            }
               
        }
        
    ?>
    <form action="adivino.php" method="POST">
        <p>Introduce el numero: <input type="number" name="numeroUsuario" autofocus></p>
        <p><input type="hidden" name="numeroAleatorio" value="<?php echo $numeroAleatorio; ?>"></p>
        <p><input type="hidden" name="contador" value="<?php echo $contador; ?>"></p>

        <p><input type="submit" name="comprobar" value="Comprobar"></p>
    </form>
</body>
</html>