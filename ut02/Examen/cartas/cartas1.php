<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartas 1</title>
    <link href="examen.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>Muestra Cartas</h1>
    <p>Elija un numero de cartas y un palo.</p>

    <form action="cartas2.php" method="POST">
        Numero de cartas: <input type="number" name="num" min="1" max="12" autofocus/><br>
        <select name="palo">
        
            <option value="" disabled selected>Elija el palo</option>
            <option value="corazones"> Corazones </option>
            <option value="diamantes"> Diamantes </option>
            <option value="picas"> Picas </option>
            <option value="treboles"> Treboles </option>
        </select>
        <br>
        <input type="submit" name="contar" value="Contar"/>
    </form>
    <footer>
        <p>Rodrigo Sánchez Valle</p>
    </footer>
</body>
</html>