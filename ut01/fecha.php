<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fechas</title>
</head>
<body>
    <?php
        $mes_num = date("m");
        $dia_semana = date("N");
        switch($mes_num)
        {
            case 1: $mes = "enero";
            break;

            case 2: $mes = "febrero";
            break;

            case 3: $mes = "marzo";
            break;

            case 4: $mes = "abril";
            break;

            case 5: $mes = "mayo";
            break;

            case 6: $mes = "junio";
            break;

            case 7: $mes = "julio";
            break;

            case 8: $mes = "agosto";
            break;

            case 9: $mes = "septeimbre";
            break;

            case 10: $mes = "octubre";
            break;

            case 11: $mes = "noviembre";
            break;

            case 12: $mes = "diciembre";
            break;
        }

        switch ($dia_semana)
        {
            case 1: $dia = "lunes";
            break;

            case 2: $dia = "martes";
            break;

            case 3: $dia = "miercoles";
            break;

            case 4: $dia = "jueves";
            break;

            case 5: $dia = "viernes";
            break;

            case 6: $dia = "sabado";
            break;

            case 7: $dia = "domingo";
            break;
        }
        print $dia. ", ".date("j")." de ".$mes." de ".date("Y");
    ?>
</body>
</html>