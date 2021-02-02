<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10-02</title>
</head>
<body>
    <?php
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        
        if(($mes == 3 && $dia >=21) ||($mes == 4 && $dia <=20))
        {
            $signo = "Aries";
        }
        if(($mes == 4 && $dia >=21) ||($mes == 5 && $dia <=20))
        {
            $signo = "Tauro";
        }
        if(($mes == 5 && $dia >=21) ||($mes == 6 && $dia <=20))
        {
            $signo = "Géminis";
        }
        if(($mes == 6 && $dia >=21) ||($mes == 7 && $dia <=20))
        {
            $signo = "Cáncer";
        }
        if(($mes == 7 && $dia >=21) ||($mes == 8 && $dia <=20))
        {
            $signo = "Leo";
        }
        if(($mes == 8 && $dia >=21) ||($mes == 9 && $dia <=20))
        {
            $signo = "Virgo";
        }
        if(($mes == 9 && $dia >=21) ||($mes == 10 && $dia <=20))
        {
            $signo = "Libra";
        }
        if(($mes == 10 && $dia >=21) ||($mes == 11 && $dia <=20))
        {
            $signo = "Escorpio";
        }
        if(($mes == 11 && $dia >=21) ||($mes == 12 && $dia <=20))
        {
            $signo = "Sagitario";
        }
        if(($mes == 12 && $dia >=21) ||($mes == 1 && $dia <=19))
        {
            $signo = "Capricornio";
        }
        if(($mes == 1 && $dia >=20) ||($mes == 2 && $dia <=18))
        {
            $signo = "Acuario";
        }
        if(($mes == 2 && $dia >= 19) ||($mes == 3 && $dia <=20))
        {
            $signo = "Piscis";
        }
        echo "Tu signo del zodiaco es ",$signo;

    ?>
    
    <br>
    <a href="10-01.php">»Volver</a>
</body>
</html>