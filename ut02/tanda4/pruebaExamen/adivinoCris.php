<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adivino</title>
    <style>
    body {
        text-align: center;
        background-color: darkgray;
        font-size: 1.3em;
    }

    </style>
</head>
<body>
    <h1 style="text-align:center">Adivino</h1>

    <p><strong>Debe adivinar un número entre el 1 y el 100.</strong></p>

<?php 
    if(!isset($_POST["numeroUsuaria"])) {
        $numeroUsuaria = "";
        $numeroAleatorio = rand(1,100);
    } else {
        $numeroUsuaria = (int)$_POST["numeroUsuaria"];
        $numeroAleatorio = $_POST["numeroAleatorio"];
    }

    //echo $numeroAleatorio;

    if($numeroUsuaria == $numeroAleatorio)
    {
        echo "<h2 style='color:green'>¡Felicidades!</h2>";

        echo "<p><a href='adivinoCris.php'>Volver a jugar</a></p>";

    } else {
        if($numeroUsuaria < 0) {
            echo "<p style='color:red'>El número debe ser positivo.</p>";
        } else {
            if($numeroUsuaria == "")
            {
                echo "<p style='color:red'>No ha escrito ningún número.</p>";
            } else {
                if($numeroUsuaria < $numeroAleatorio)
                {
                    echo "<p style='color:red'>El número que ha introducido es demasiado pequeño.</p>";
                } else {
                    echo "<p style='color:red'>El número que ha introducido es demasiado grande.</p>";
                } 
            }
        }
    }

?>

<form action="adivinoCris.php" method="POST">
    <p>Introduzca un número: <input type="number" name="numeroUsuaria" autofocus></p>
    <p><input type="hidden" name="numeroAleatorio" value="<?php echo $numeroAleatorio; ?> "></p>
    <p><input type="submit" name="comprobar" value="Comprobar Número"></p>
</form>
</body>
</html>