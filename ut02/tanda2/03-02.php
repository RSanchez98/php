<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03-02</title>
</head>
<body>
    <?php
        $dia = $_POST['dia'];
        switch($dia)
        {
            case 1: echo "lunes"; break;
            case 2: echo "martes"; break;
            case 3: echo "miercoles"; break;
            case 4: echo "jueves"; break;
            case 5: echo "viernes"; break;
            case 6: echo "sabado"; break;
            case 7: echo "domingo"; break;
            default: echo "Escribe un numero del 1 al 7 que no te enteras";
        }
    ?>
    <br>
        <a href="03-01.php">Volver</a>
</body>
</html>