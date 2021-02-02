<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>15-02</title>
</head>
<body>
    <?php

        foreach($_POST as $respuestas)
        {
            $puntos = $puntos + $respuestas;
        }
    

        if($puntos <=10)
        {
            echo "¡Enhorabuena! tu pareja parece ser totalmente fiel.";
        }
        if($puntos >=11 && $puntos <=21)
        {
            echo "Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.";
        }
        if($puntos>=22)
        {
            echo "Tu pareja tiene todos los ingredientes de estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües qué es lo que está pasando por su cabeza.";
        }
        
        echo "<br> Su puntuación ha sido de ",$puntos, " puntos";
    ?>
    <br><br>
    <a href="15-01.php">Volver</a>
</body>
</html>