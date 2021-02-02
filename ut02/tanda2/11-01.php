<!-- Escribe un programa que dada una hora determinada (horas y minutos), calcule los segundos que faltan para llegar a la medianoche. -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11-01</title>
</head>
<body>
    <h1>Hora y minutos</h1>
    <p>Introduce hora y minutos para saber cuando queda hasta la media noche (00:00)</p>
    <form action="11-02.php" method="post">
        Hora > <input type="number" name="hora" size="2" min="00" max="22"> <br>
        Minutos > <input type="number" name="min" size="2" min ="00" max="59"><br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>