<!-- Escribe un programa que nos diga el horóscopo a partir del día y el mes de nacimiento. -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10-01</title>
</head>
<body>
    <h1>Horoscopo</h1>
    <p>Introduce el dia y el mes para saber cual es tu signo del zodiaco</p>
        <form action="10-02.php" method="post">
            Dia <input type="number" name="dia" min="1" max="31" size="1"><br>
            Mes <input type="number" name="mes" min="1" max="12" size="1"><br>
            <input type="submit" value="Next">
        </form>
</body>
</html>